<?php

use App\Services\SeoService;

if (! function_exists('seo')) {

    function seo(?array $data = null): SeoService
    {
        $service = app(SeoService::class);

        if ($data !== null) {
            $service->set($data);
        }

        return $service;
    }
}
