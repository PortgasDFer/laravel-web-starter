<?php

namespace App\Console\Commands;

use App\Services\SitemapService;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Genera el sitemap.xml del sitio';

    public function handle(SitemapService $sitemapService): int
    {
        $this->info('Generando sitemap...');

        $sitemap = $sitemapService->generate();

        $sitemap->writeToFile(
            public_path('sitemap.xml')
        );

        $this->info('Sitemap generado correctamente.');

        return self::SUCCESS;
    }
}
