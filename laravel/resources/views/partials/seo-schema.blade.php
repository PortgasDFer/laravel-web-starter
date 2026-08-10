@php

    $seo = seo()->get();

    $siteUrl = rtrim(config('app.url'), '/');
    $currentUrl = url()->current();

    /*
    |--------------------------------------------------------------------------
    | Organization
    |--------------------------------------------------------------------------
    */

    $organizationSchema = [
        '@type' => 'Organization',
        '@id' => $siteUrl . '#organization',

        'name' => $seo['site_name'],

        'url' => $siteUrl,

        'logo' => [
            '@type' => 'ImageObject',
            'url' => asset('images/seo/logo.png'),
        ],

        'description' => $seo['description'],
    ];


    /*
    |--------------------------------------------------------------------------
    | WebSite
    |--------------------------------------------------------------------------
    */

    $websiteSchema = [
        '@type' => 'WebSite',
        '@id' => $siteUrl . '#website',

        'url' => $siteUrl,

        'name' => $seo['site_name'],

        'publisher' => [
            '@id' => $siteUrl . '#organization',
        ],

        'inLanguage' => 'es-MX',
    ];


    /*
    |--------------------------------------------------------------------------
    | Service
    |--------------------------------------------------------------------------
    */

    $serviceSchema = null;

    if (
        ($seo['type'] ?? null) === 'service' &&
        !empty($seo['service'])
    ) {

        $service = $seo['service'];

        $serviceSchema = [
            '@type' => 'Service',

            '@id' => $currentUrl . '#service',

            'name' => $service['name'],

            'description' => $service['description'],

            'url' => $currentUrl,

            'provider' => [
                '@id' => $siteUrl . '#organization',
            ],

            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Mexico',
            ],
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | BreadcrumbList
    |--------------------------------------------------------------------------
    */

    $breadcrumbSchema = null;

    if (!empty($seo['breadcrumbs'])) {

        $items = [];

        foreach ($seo['breadcrumbs'] as $index => $breadcrumb) {

            $items[] = [
                '@type' => 'ListItem',

                'position' => $index + 1,

                'name' => $breadcrumb['name'],

                'item' => $breadcrumb['url'],
            ];
        }

        $breadcrumbSchema = [
            '@type' => 'BreadcrumbList',

            'itemListElement' => $items,
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Graph
    |--------------------------------------------------------------------------
    */

    $schemaGraph = [
        $organizationSchema,
        $websiteSchema,
    ];

    if ($serviceSchema) {
        $schemaGraph[] = $serviceSchema;
    }

    if ($breadcrumbSchema) {
        $schemaGraph[] = $breadcrumbSchema;
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => $schemaGraph,
    ];

@endphp

<script type="application/ld+json">
{!! json_encode(
    $schema,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_PRETTY_PRINT
) !!}
</script>
