<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Place favicon.ico in the root directory -->

    <link rel="icon" type="image/webp" href="{{ asset('images/favicon.webp') }}">

    <!-- theme style switch -->
    <meta name="theme-style-mode" content="1">
    @include('partials.seo')
    @include('partials.seo-schema')
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/backtotop.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{ asset('nerox/assets/css/style.css')}}">
    @stack('styles')
</head>
<body>
    <!-- preloader start -->
    <div class="preloader">
        <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
        </div>
    </div>
    <!-- preloader end -->

<!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->
    @include('components.site-header')
    @include('components.site-sidebar')
    <main>
        @yield('content')
    </main>
    @include('components.site-footer')
    <!-- WhatsApp Floating Button -->
    <div class="aaf-whatsapp">

        <div class="aaf-whatsapp-tooltip">
            ¿Necesitas ayuda?<br>
            <strong>Estamos para ayudarte.</strong>
        </div>

        <a href="https://wa.me/525637487598?text=Hola%20AAF%20Desarrollo%20Digital%2C%20vi%20su%20sitio%20web%20y%20me%20gustar%C3%ADa%20conocer%20m%C3%A1s%20sobre%20sus%20servicios.%20Tengo%20un%20proyecto%20que%20me%20gustar%C3%ADa%20comentar%20con%20ustedes."
        class="aaf-whatsapp-button"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Contactar por WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <!-- JS here -->
    <script src="{{ asset('nerox/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/slick.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/parallax.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/cookie.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/style-switcher.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/counterup.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/wow.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/cookie.js') }}"></script>
    <script src="{{ asset('nerox/assets/js/main.js') }}"></script>
</body>
</html>
