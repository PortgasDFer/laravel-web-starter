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
        $ttl = config('cache.page_ttl', 600);

        // 🔥 CACHE HIT
        if (Cache::has($key)) {
            $html = Cache::get($key);
            $etag = md5($html);

            // Si el navegador ya tiene esta versión
            if ($request->headers->get('If-None-Match') === $etag) {
                return response('', 304)
                    ->header('ETag', $etag)
                    ->header('X-Cache', 'HIT')
                    ->header('X-Robots-Tag', 'index, follow');
            }

            return response($html)
                ->header('ETag', $etag)
                ->header('Cache-Control', 'public, max-age='.$ttl)
                ->header('X-Cache', 'HIT')
                ->header('X-Robots-Tag', 'index, follow');
        }

        /** @var Response $response */
        $response = $next($request);

        if ($response->getStatusCode() === 200) {
            $html = $response->getContent();
            Cache::put($key, $html, $ttl);

            $etag = md5($html);
            $response->headers->set('ETag', $etag);
        }

        $response->headers->set('X-Cache', 'MISS');
        $response->headers->set('Cache-Control', 'public, max-age='.$ttl);
        $response->headers->set('X-Robots-Tag', 'index, follow');

        return $response;
    }
}
