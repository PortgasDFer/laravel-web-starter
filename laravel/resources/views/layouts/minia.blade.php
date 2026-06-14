<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>@yield('title', 'Dashboard') | Stasia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{ asset('minia/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('minia/assets/css/preloader.min.css') }}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('minia/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('minia/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('minia/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        @stack('styles')
    </head>

    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            @include('components.topbar')
            @include('components.vertical-menu')
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @if(session('success'))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">

                                <i class="mdi mdi-check-circle me-2"></i>

                                {{ session('success') }}

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert">
                                </button>

                            </div>

                        @endif

                        @if($errors->any())

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                <strong>Se encontraron errores:</strong>

                                <ul class="mb-0 mt-2">

                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert">
                                </button>

                            </div>

                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('minia/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('minia/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('minia/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('minia/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('minia/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('minia/assets/libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('minia/assets/libs/pace-js/pace.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('minia/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('minia/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('minia/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- dashboard init -->
        <script src="{{ asset('minia/assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('minia/assets/js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
