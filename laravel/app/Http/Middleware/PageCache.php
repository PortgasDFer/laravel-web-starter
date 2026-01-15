<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PageCache
{
    public function handle(Request $request, Closure $next)
    {
        // Solo GET
        if (!$request->isMethod('GET')) {
            return $next($request);
        }

        // No cachear si hay sesión/login
        if ($request->user()) {
            return $next($request);
        }

        $key = 'page_cache:' . md5($request->fullUrl());

        if (Cache::has($key)) {
            return response(Cache::get($key));
        }

        $response = $next($request);

        if ($response->status() === 200) {
            Cache::put($key, $response->getContent(), now()->addMinutes(10));
        }

        return $response;
    }
}
