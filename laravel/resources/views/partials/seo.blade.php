@php
    $seoData = seo()->get();
@endphp

<title>{{ $seoData['title'] }}</title>

<meta name="description" content="{{ $seoData['description'] }}">

@if(!empty($seoData['keywords']))
    <meta name="keywords" content="{{ $seoData['keywords'] }}">
@endif

<meta name="author" content="{{ config('seo.author') }}">

<meta name="robots" content="{{ $seoData['robots'] }}">

<link rel="canonical" href="{{ $seoData['canonical'] }}">

{{-- Open Graph --}}
<meta property="og:type" content="{{ $seoData['type'] }}">
<meta property="og:title" content="{{ $seoData['title'] }}">
<meta property="og:description" content="{{ $seoData['description'] }}">
<meta property="og:url" content="{{ $seoData['canonical'] }}">
<meta property="og:image" content="{{ $seoData['image'] }}">
<meta property="og:site_name" content="{{ $seoData['site_name'] }}">
<meta property="og:locale" content="{{ $seoData['locale'] }}">

{{-- Twitter --}}
<meta name="twitter:card" content="{{ $seoData['twitter_card'] }}">
<meta name="twitter:title" content="{{ $seoData['title'] }}">
<meta name="twitter:description" content="{{ $seoData['description'] }}">
<meta name="twitter:image" content="{{ $seoData['image'] }}">
