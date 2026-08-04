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
                <h3 class="breadcrumb__title">Diseño responsivo</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Diseño responsivo</span>
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
                        Experiencias digitales que se adaptan perfectamente a cualquier dispositivo.
                    </h2>

                    <p class="tp-section-text">
                        Hoy, la mayoría de los usuarios navegan desde dispositivos móviles. En AAF Desarrollo Digital desarrollamos interfaces responsivas que garantizan una experiencia consistente, intuitiva y de alto rendimiento en computadoras, tablets y smartphones, sin importar el tamaño de la pantalla.
                    </p>

                    <div class="service-features">

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Compatible con computadoras, tablets y móviles.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Diseño adaptable para cualquier resolución.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Mejor experiencia de usuario en todos los dispositivos.
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            Optimizado para SEO y Core Web Vitals.
                        </div>

                    </div>

                </div>

            </div>

            <!-- Imagen -->
            <div class="col-xl-6 col-lg-6">

                <div class="service-intro-image">

                    <img
                        src="{{ asset('sitio/img/services/responsive-design.webp') }}"
                        class="img-fluid"
                        alt="Diseño Responsivo">

                </div>

            </div>

        </div>

    </div>

</section>
@endsection