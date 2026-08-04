@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/about1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Desarrollo a medida</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Desarrollo a medida</span>
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
                        Soluciones diseñadas específicamente para las necesidades de tu negocio.
                    </h2>

                    <p class="tp-section-text">
                        En AAF Desarrollo Digital entendemos que cada empresa tiene procesos,
                        objetivos y desafíos diferentes. Por ello desarrollamos soluciones
                        completamente personalizadas que se adaptan a tu operación, optimizan
                        procesos y están preparadas para crecer junto con tu negocio.
                    </p>

                    <div class="service-features">

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Desarrollo completamente personalizado.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Arquitectura escalable y segura.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Integración con sistemas existentes.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Código mantenible y preparado para evolucionar.
                        </div>

                    </div>

                </div>

            </div>

            <!-- Imagen -->
            <div class="col-xl-6 col-lg-6">

                <div class="service-intro-image">

                    <img
                        src="{{ asset('sitio/img/services/desarrollo-medida.webp') }}"
                        class="img-fluid"
                        alt="Desarrollo a Medida">

                </div>

            </div>

        </div>

    </div>

</section>
@endsection