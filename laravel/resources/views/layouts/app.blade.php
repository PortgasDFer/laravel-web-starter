<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title', config('app.name'))</title>

    <meta name="description" content="@yield('description', 'Sitio web optimizado con Laravel')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- OpenGraph --}}
    <meta property="og:title" content="@yield('title', config('app.name'))">
    <meta property="og:description" content="@yield('description', 'Sitio web optimizado con Laravel')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- SEO --}}
    <link rel="canonical" href="{{ url()->current() }}">
</head>
<body>
    @yield('content')
</body>
</html>
