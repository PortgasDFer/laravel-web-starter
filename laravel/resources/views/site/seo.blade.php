@extends('layouts.nerox')
@push('styles')
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
@endpush
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/about1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Optimización SEO</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Optimización SEO</span>
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

                    <span class="tp-section-subtitle">
                        Optimización SEO
                    </span>

                    <h2 class="tp-section-title">
                        Desarrollamos sitios preparados para destacar en los motores de búsqueda.
                    </h2>

                    <p class="tp-section-text">
                        El posicionamiento orgánico comienza con una base técnica sólida. Implementamos
                        buenas prácticas de SEO desde el desarrollo del proyecto para mejorar la
                        indexación, optimizar el rendimiento y ofrecer una experiencia que beneficie
                        tanto a los usuarios como a los motores de búsqueda.
                    </p>

                    <div class="service-features">

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            SEO técnico desde el desarrollo.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Optimización de Core Web Vitals.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Estructura semántica y metadatos optimizados.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Preparado para Google y otros buscadores.
                        </div>

                    </div>

                </div>

            </div>

            <!-- Imagen -->
            <div class="col-xl-6 col-lg-6">

                <div class="service-intro-image">

                    <img
                        src="{{ asset('sitio/img/services/seo-optimization.webp') }}"
                        class="img-fluid"
                        alt="Optimización SEO">

                </div>

            </div>

        </div>

    </div>

</section>

@endsection