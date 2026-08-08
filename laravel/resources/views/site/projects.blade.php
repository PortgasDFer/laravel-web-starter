@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/portfolio.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Proyectos</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Proyectos</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->

<!-- portfolio intro start -->
<section class="portfolio-intro tp-section-space">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">

                <div class="portfolio-intro-content text-center">

                    <span class="portfolio-subtitle">
                        Nuestro trabajo
                    </span>

                    <h2 class="portfolio-title">
                        Diseñamos experiencias digitales que combinan
                        creatividad, estrategia y tecnología.
                    </h2>

                    <p>
                        Cada proyecto representa una oportunidad para crear algo
                        diferente. Desde sitios corporativos hasta plataformas
                        personalizadas, desarrollamos soluciones enfocadas en
                        rendimiento, escalabilidad y una experiencia de usuario
                        excepcional.
                    </p>

                </div>

            </div>
        </div>

        <div class="row g-4 justify-content-center mt-40">

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="portfolio-tag">
                    <i class="fa-regular fa-code"></i>
                    Desarrollo Web
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="portfolio-tag">
                    <i class="fa-regular fa-palette"></i>
                    UX / UI
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="portfolio-tag">
                    <i class="fa-regular fa-layer-group"></i>
                    Branding Digital
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="portfolio-tag">
                    <i class="fa-regular fa-bolt"></i>
                    Automatización
                </div>
            </div>

        </div>

    </div>
</section>
<!-- portfolio intro end -->


        <!--=================================
PORTFOLIO
==================================-->
<!-- ===========================
Portfolio Projects
============================ -->
<section class="portfolio-showcase tp-section-space">

    <div class="container">

        <div class="row mb-80 mt-4">

            <div class="col-lg-8">

                <h2 class="portfolio-heading">
                    Proyectos que reflejan nuestra forma de desarrollar productos digitales.
                </h2>

                <p class="portfolio-description">
                    Cada proyecto representa un reto distinto. Ya sea un sitio web corporativo,
                    una plataforma empresarial o una migración tecnológica, nuestro objetivo
                    siempre es entregar soluciones funcionales, escalables y bien diseñadas.
                </p>

            </div>

        </div>

        <!-- ===========================
        DESTACADOS
        ============================ -->

        <div class="row g-4">

            <!-- Grecen -->
            <div class="col-lg-12">

                <article class="project-card project-lg">

                    <img src="{{ asset('sitio/img/projects/alva.webp') }}" alt="ALVA Seguros">

                    <div class="project-overlay">

                        <div class="project-category">
                            Plataforma Web
                        </div>

                        <h3>
                            GRUPO GRECEN
                        </h3>

                        <p>
                            Migración integral de una plataforma empresarial de Laravel 7 a Laravel 12, modernizando su arquitectura para mejorar la seguridad, el rendimiento, la compatibilidad con las versiones más recientes de PHP y facilitar su mantenimiento y evolución futura.
                        </p>

                        <div class="project-tech">

                            <span>Laravel 12</span>

                            <span>SEO</span>

                            <span>PWA</span>

                            <span>CMS</span>

                        </div>

                    </div>

                </article>

            </div>

            <!-- Aquino -->

            <div class="col-lg-4">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/aquino.webp') }}" alt="Aquino Media">

                    <div class="project-overlay">

                        <div class="project-category">
                            Sitio Corporativo
                        </div>

                        <h3>
                            Aquino Media
                        </h3>

                        <div class="project-tech">

                            <span>Laravel</span>

                            <span>Responsive</span>

                        </div>

                    </div>

                </article>

            </div>

            <!-- DyaMedic -->

            <div class="col-lg-4">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/dyamedic.webp') }}" alt="DyaMedic">

                    <div class="project-overlay">

                        <div class="project-category">
                            Sector Salud
                        </div>

                        <h3>
                            DyaMedic
                        </h3>

                    </div>

                </article>

            </div>

            <!-- IT Cabling -->

            <div class="col-lg-4">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/itcabling.webp') }}" alt="IT Cabling">

                    <div class="project-overlay">

                        <div class="project-category">
                            Corporativo
                        </div>

                        <h3>
                            IT Cabling
                        </h3>

                    </div>

                </article>

            </div>

            <!-- Medsesa -->

            <div class="col-lg-6">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/medsesa.webp') }}" alt="Medsesa">

                    <div class="project-overlay">

                        <div class="project-category">
                            Software Empresarial
                        </div>

                        <h3>
                            Medsesa
                        </h3>

                    </div>

                </article>

            </div>

            <!-- Backupp -->

            <div class="col-lg-6">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/medsesa.webp') }}" alt="BACKUPP">

                    <div class="project-overlay">

                        <div class="project-category">
                            Software Empresarial
                        </div>

                        <h3>
                            BACKUPP
                        </h3>

                    </div>

                </article>

            </div>

            <!-- Vida y mente sana -->

            <div class="col-lg-4">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/aquino.webp') }}" alt="Vida y mente sana">

                    <div class="project-overlay">

                        <div class="project-category">
                            Landing Page
                        </div>

                        <h3>
                            Vida y mente sana
                        </h3>

                    </div>

                </article>

            </div>

            <!-- ALVA Seguros -->

            <div class="col-lg-4">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/aquino.webp') }}" alt="ALVA Seguros">

                    <div class="project-overlay">

                        <div class="project-category">
                            Plataforma Web
                        </div>

                        <h3>
                            ALVA Seguros
                        </h3>

                    </div>

                </article>

            </div>

            <!-- SPASSSIO -->

            <div class="col-lg-4">

                <article class="project-card">

                    <img src="{{ asset('sitio/img/projects/aquino.webp') }}" alt="SPASSSIO">

                    <div class="project-overlay">

                        <div class="project-category">
                            Plataforma Web + PWA
                        </div>

                        <h3>
                            SPASSSIO
                        </h3>

                    </div>

                </article>

            </div>

        </div>

        <!-- ===========================
        EN DESARROLLO
        ============================ -->

        <div class="portfolio-section-title mt-120">

            <span></span>

            <h5>Actualmente desarrollando</h5>

        </div>

        <div class="row g-4">

            <div class="col-lg-6">

                <article class="project-progress">

                    <div class="status">

                        <span class="pulse"></span>

                        En desarrollo

                    </div>

                    <h3>
                        STASIA
                    </h3>

                    <p>
                        Plataforma CMS desarrollada por <i>AAF Desarrollo Digital</i> para administrar
                        sitios web, portafolios y contenido dinámico desde un panel
                        modular y escalable.
                    </p>

                </article>

            </div>

            <div class="col-lg-6">

                <article class="project-progress">

                    <div class="status">

                        <span class="pulse"></span>

                        En desarrollo

                    </div>

                    <h3>
                        Grupo Grecen
                    </h3>

                    <p>
                        Migración del Front-End hacia Angular para modernizar
                        la interfaz, mejorar la experiencia de usuario y facilitar
                        la evolución futura del sistema.
                    </p>

                </article>

            </div>

        </div>

    </div>

</section>

<!--=================================
EXPERIENCIA
==================================-->
<section class="experience-area pt-120 pb-120">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-7 text-center">

                <h2 class="section-title">
                    Desarrollamos soluciones digitales que generan valor para las empresas.
                </h2>

                <p class="section-description">
                    Participamos en el desarrollo de plataformas empresariales, sitios web,
                    migraciones tecnológicas y soluciones personalizadas utilizando tecnologías
                    modernas y buenas prácticas de desarrollo.
                </p>

            </div>

        </div>

        <div class="row g-4 mt-50">

            <div class="col-lg-3 col-md-6">

                <div class="experience-card">

                    <div class="experience-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <h4>
                        Desarrollo Web
                    </h4>

                    <p>
                        Sitios corporativos, landing pages y plataformas desarrolladas a medida.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="experience-card">

                    <div class="experience-icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>

                    <h4>
                        Software Empresarial
                    </h4>

                    <p>
                        Sistemas internos para automatizar procesos y optimizar operaciones.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="experience-card">

                    <div class="experience-icon">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </div>

                    <h4>
                        Modernización
                    </h4>

                    <p>
                        Migración y actualización de plataformas hacia tecnologías actuales.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="experience-card">

                    <div class="experience-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>

                    <h4>
                        Optimización
                    </h4>

                    <p>
                        Mejoras en rendimiento, SEO técnico y experiencia de usuario.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- enterprise cta start -->
<section class="enterprise-cta pt-120 pb-120">
    <div class="container">

        <div class="enterprise-cta-box">

            <span class="enterprise-cta-subtitle">
                ¿Tu empresa tiene procesos que podrían automatizarse?
            </span>

            <h2>
                Convirtamos tus procesos en una ventaja competitiva.
            </h2>

            <p>
                Cada empresa opera de forma distinta. Analizamos tus procesos, identificamos oportunidades de mejora y diseñamos una solución tecnológica completamente personalizada, preparada para crecer junto con tu negocio.
            </p>

            <div class="enterprise-cta-buttons">

                <a href="{{ route('contact') }}" class="tp-solid-btn">
                    Solicitar una asesoría
                </a>

                <a href="{{ route('contact') }}" class="tp-border-btn">
                    Hablemos de tu proyecto
                </a>

            </div>

        </div>

    </div>
</section>
<!-- enterprise cta end -->
@endsection
