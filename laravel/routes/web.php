<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redis-test', function () {
    Cache::put('ok', 'funciona', 60);
    return Cache::get('ok');
});

Route::get('/sitemap.xml', function () {
    $pages = [
        url('/'),
        // aquí luego agregas más páginas
    ];

    return response()->view('seo.sitemap', compact('pages'))
        ->header('Content-Type', 'application/xml');
});