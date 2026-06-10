<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- preloader css -->
    <link rel="stylesheet" href="{{asset('/minia/assets/css/preloader.min.css')}}" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('/minia/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/minia/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/minia/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <title>Iniciar Sesión | Stasia</title>
    
    @stack('styles')
</head>
<body>

    @yield('content')

    <!-- JAVASCRIPT -->
    <script src="{{ asset('minia/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('minia/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('minia/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('minia/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('minia/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('minia/assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('minia/assets/libs/pace-js/pace.min.js') }}"></script>
    <script src="{{ asset('minia/assets/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
