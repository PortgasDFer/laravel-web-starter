@extends('layouts.nerox')
@push('styles')
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
@endpush
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/rendimiento01.webp')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Alto rendimiento</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Alto rendimiento</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->
<!--=================================
Service Intro
==================================-->
<section class="service-intro pt-120 pb-120">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Contenido -->
            <div class="col-xl-6 col-lg-6">

                <div class="service-intro-content">

                    <h2 class="tp-section-title">
                        Sitios web rápidos, eficientes y preparados para ofrecer la mejor experiencia.
                    </h2>

                    <p class="tp-section-text">
                        La velocidad es un factor clave para el éxito de cualquier proyecto digital.
                        Desarrollamos sitios y aplicaciones optimizados para reducir tiempos de carga,
                        mejorar la experiencia del usuario y cumplir con las mejores prácticas de rendimiento,
                        favoreciendo también el posicionamiento en buscadores.
                    </p>

                    <div class="service-features">

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Optimización de tiempos de carga.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Mejores Core Web Vitals.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Código limpio y optimizado.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Experiencia fluida en cualquier dispositivo.
                        </div>

                    </div>

                </div>

            </div>

            <!-- Imagen -->

            <div class="col-xl-6 col-lg-6">

                <div class="service-intro-image">

                    <img
                        src="{{ asset('images/rendimiento02.webp') }}"
                        class="img-fluid"
                        alt="Alto Rendimiento">

                </div>

            </div>

        </div>

    </div>

</section>
@endsection
