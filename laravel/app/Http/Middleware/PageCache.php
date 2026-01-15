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
        if (
            !$request->isMethod('GET') ||
            $request->user() ||
            $request->is('admin*')
        ) {
            return $next($request);
        }

        $key = 'page_cache:' . md5($request->fullUrl());
        $ttl = config('cache.page_ttl', 600); // 10 minutos

        if (Cache::has($key)) {
            return response(Cache::get($key))
                ->header('X-Cache', 'HIT')
                ->header('Cache-Control', 'public, max-age='.$ttl);
        }

        /** @var Response $response */
        $response = $next($request);

        if ($response->getStatusCode() === 200) {
            Cache::put($key, $response->getContent(), $ttl);
        }

        return $response
            ->header('X-Cache', 'MISS')
            ->header('Cache-Control', 'public, max-age='.$ttl);
    }
}
