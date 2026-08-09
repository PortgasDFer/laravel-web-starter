@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/soporte01.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Soporte Continuo</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Soporte Continuo</span>
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
                        Atención Personalizada
                    </span>

                    <h2 class="tp-section-title">
                        Cada proyecto recibe un acompañamiento cercano desde el primer contacto.
                    </h2>

                    <p class="tp-section-text">
                        Creemos que las mejores soluciones nacen de una comunicación clara y una
                        comprensión profunda de cada negocio. Trabajamos de forma cercana con nuestros
                        clientes para entender sus objetivos, resolver dudas y construir soluciones
                        alineadas con sus necesidades reales.
                    </p>

                    <div class="service-features">

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Comunicación directa durante todo el proyecto.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Seguimiento personalizado en cada etapa.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Soluciones adaptadas a cada empresa.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Asesoría tecnológica antes, durante y después del desarrollo.
                        </div>

                    </div>

                </div>

            </div>

            <!-- Imagen -->

            <div class="col-xl-6 col-lg-6">

                <div class="service-intro-image">

                    <img
                            src="{{ asset('images/soporte02.jpg') }}"
                            class="img-fluid"
                        alt="Atención Personalizada">

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
