@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/personalizada.webp')}}">
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
                        Soporte Continuo
                    </span>

                    <h2 class="tp-section-title">
                        Acompañamos la evolución de tu proyecto después de su lanzamiento.
                    </h2>

                    <p class="tp-section-text">
                        Nuestro compromiso no termina cuando un proyecto entra en producción.
                        Brindamos soporte técnico, mantenimiento evolutivo y mejoras continuas
                        para garantizar que tu sitio web o plataforma permanezca segura,
                        actualizada y preparada para responder a las necesidades de tu negocio.
                    </p>

                    <div class="service-features">

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Corrección de incidencias y soporte técnico.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Actualizaciones de seguridad y mantenimiento.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Implementación de nuevas funcionalidades.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Acompañamiento durante el crecimiento del proyecto.
                        </div>

                    </div>

                </div>

            </div>

            <!-- Imagen -->

            <div class="col-xl-6 col-lg-6">

                <div class="service-intro-image">

                    <img
                        src="{{ asset('images/personalizada01.webp') }}"
                        class="img-fluid"
                        alt="Soporte Continuo">

                </div>

            </div>

        </div>

    </div>

</section>
@endsection
