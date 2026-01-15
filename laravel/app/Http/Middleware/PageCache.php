<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class PageCache
{
    public function handle(Request $request, Closure $next)
    {
        // Solo GET, no usuarios logueados, no admin
        if (
            !$request->isMethod('GET') ||
            $request->user() ||
            $request->is('admin*')
        ) {
            return $next($request);
        }

        $key = 'page_cache:' . md5($request->fullUrl());
        $ttl = config('cache.page_ttl', 600);

        // 🔥 CACHE HIT
        if (Cache::has($key)) {
            return response(Cache::get($key))
                ->header('X-Cache', 'HIT')
                ->header('Cache-Control', 'public, max-age='.$ttl)
                ->header('X-Robots-Tag', 'index, follow');
        }

        /** @var Response $response */
        $response = $next($request);

        // Guardar HTML en cache
        if ($response->getStatusCode() === 200) {
            Cache::put($key, $response->getContent(), $ttl);
        }

        // 🔥 CACHE MISS
        $response->headers->set('X-Cache', 'MISS');
        $response->headers->set('Cache-Control', 'public, max-age='.$ttl);
        $response->headers->set('X-Robots-Tag', 'index, follow');

        return $response;
    }
}
