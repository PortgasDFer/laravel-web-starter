@extends('layouts.login')

@section('content')
<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="{{ asset('/images/logo400.png') }}" alt="" height="28"> <span class="logo-txt">STASIA</span>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Bienvenido</h5>
                                    <p class="text-muted mt-2">Ingresa con tus credenciales de usuario.</p>
                                </div>
                                <form class="mt-4 pt-2" method="POST" action="{{ route('login') }}">

                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label">Correo electrónico</label>

                                        <input
                                            type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="Ingresa tu correo"
                                            required
                                            autofocus>

                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">

                                        <div class="d-flex align-items-start">

                                            <div class="flex-grow-1">
                                                <label class="form-label">Contraseña</label>
                                            </div>

                                            <div class="flex-shrink-0">

                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-muted">
                                                        ¿Olvidaste tu contraseña?
                                                    </a>
                                                @endif

                                            </div>

                                        </div>

                                        <div class="input-group auth-pass-inputgroup">

                                            <input
                                                type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password"
                                                placeholder="Ingresa tu contraseña"
                                                required
                                                autocomplete="current-password">

                                            <button
                                                class="btn btn-light shadow-none ms-0"
                                                type="button"
                                                id="password-addon">

                                                <i class="mdi mdi-eye-outline"></i>

                                            </button>

                                        </div>

                                        @error('password')
                                            <div class="text-danger mt-1">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="row mb-4">

                                        <div class="col">

                                            <div class="form-check">

                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    name="remember"
                                                    id="remember-check">

                                                <label class="form-check-label" for="remember-check">
                                                    Recordarme
                                                </label>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="mb-3">

                                        <button
                                            class="btn btn-primary w-100 waves-effect waves-light"
                                            type="submit">

                                            Iniciar sesión

                                        </button>

                                    </div>

                                </form>

                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Si tienes problemas <a href="auth-register.html"
                                            class="text-primary fw-semibold"> contacta con el administrador </a> </p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Stassia   . AAF Desarrollo Digital</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay bg-primary"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-7">
                            <div class="p-0 p-sm-4 px-xl-0">
                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <!--<div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    </div>-->
                                    <!-- end carouselIndicators -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="testi-contain text-white">

                                                <h4 class="mt-4 fw-medium lh-base text-white">Bienvenido a Stasia 🚀
                                                    La plataforma para lanzar, administrar y hacer crecer tu presencia digital.
                                                    Menos tiempo configurando. Más tiempo construyendo.
                                                </h4>
                                                <div class="mt-4 pt-3 pb-5">
                                                    <div class="d-flex align-items-start">
                                                      
        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end carousel-inner -->
                                </div>
                                <!-- end review carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>
@endsection