<?php

namespace App\Services;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapService
{
    public function generate(): Sitemap
    {
        $sitemap = Sitemap::create();

        foreach ($this->staticPages() as $path => $settings) {

            $sitemap->add(
                Url::create(url($path))
                    ->setChangeFrequency($settings['frequency'])
                    ->setPriority($settings['priority'])
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Dynamic content
        |--------------------------------------------------------------------------
        |
        | Aquí posteriormente agregaremos:
        |
        | - Proyectos publicados desde STASIA
        | - Artículos del blog
        | - Otros contenidos indexables
        |
        */

        return $sitemap;
    }

    protected function staticPages(): array
    {
        return [

            '/' => [
                'priority' => 1.0,
                'frequency' => Url::CHANGE_FREQUENCY_WEEKLY,
            ],

            '/acerca-de-nosotros' => [
                'priority' => 0.8,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/contacto' => [
                'priority' => 0.9,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/proyectos' => [
                'priority' => 0.9,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            // Servicios

            '/desarrollo-web' => [
                'priority' => 0.9,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/branding' => [
                'priority' => 0.9,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/soluciones-empresariales' => [
                'priority' => 0.9,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/software-apps' => [
                'priority' => 0.9,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/desarrollo-a-medida' => [
                'priority' => 0.9,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            // Inversión

            '/desarrollo-web-inversion' => [
                'priority' => 0.8,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/branding-inversion' => [
                'priority' => 0.8,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/soluciones-empresariales-inversion' => [
                'priority' => 0.8,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/software-apps-inversion' => [
                'priority' => 0.8,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            // Características

            '/tecnologias' => [
                'priority' => 0.7,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/alto-rendimiento' => [
                'priority' => 0.7,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/diseño-responsivo' => [
                'priority' => 0.7,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/optimizacion-seo' => [
                'priority' => 0.8,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/soporte-continuo' => [
                'priority' => 0.7,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/atencion-personalizada' => [
                'priority' => 0.7,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/preguntas-frecuentes' => [
                'priority' => 0.6,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],

            '/programa-de-recomendaciones' => [
                'priority' => 0.5,
                'frequency' => Url::CHANGE_FREQUENCY_MONTHLY,
            ],
        ];
    }
}
