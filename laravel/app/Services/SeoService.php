<?php

namespace App\Services;

class SeoService
{
    protected array $data = [];

    public function __construct()
    {
        $this->data = [
            'title' => config('seo.title'),
            'description' => config('seo.description'),
            'keywords' => config('seo.keywords'),
            'author' => config('seo.author'),
            'robots' => config('seo.robots', 'index, follow'),

            'canonical' => url()->current(),

            'image' => asset('images/seo/default.jpg'),

            'type' => 'website',

            'site_name' => config('seo.og.site_name'),
            'locale' => config('seo.og.locale', 'es_MX'),
            'twitter_card' => 'summary_large_image',

            /*
             * Información adicional para Schema.org
             */
            'service' => null,

            'breadcrumbs' => [],
        ];
    }

    public function set(array $data): self
    {
        $this->data = array_replace_recursive(
            $this->data,
            $data
        );

        return $this;
    }

    public function get(): array
    {
        return $this->data;
    }
}
