@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/about1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Acerca de nosotros</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Acerca de nosotros</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->

<!-- tpabout-area start -->
<div id="about-area" class="tpabout-area pt-140 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="tpabout-content-2 pb-50">
                <h3 class="tpabout-xd-title mb-15"><b>AAF</b> Desarrollo Digital</h3>
                <span class="tpabout-xs-title mb-40">Desarrollo, diseño y sistemas digitales para empresas modernas.</span>
                <p>Nuestro enfoque combina diseño visual, experiencia de usuario y arquitectura técnica para construir plataformas modernas que no solo se vean bien, sino que también ayuden a operar, crecer y evolucionar digitalmente.</p>

                </p>Buscamos crear productos claros, funcionales y escalables, cuidando tanto la experiencia visual como la estructura tecnológica detrás de cada proyecto.</p>
                <div class="tpabout-btn mt-50">
                    <a href="contact.html" class="tp-solid-btn">Hablemos de tu proyecto</a>
                </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="tpabout-image-2 pb-50">
                <img src="{{ asset('images/about3.jpg') }}" alt="Desarrollo web, diseño y sistemas digitales para empresas modernas">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tpabout-area end -->
<!-- process-area-start -->
<section class="tp-process-area pt-120 pb-120">
    <div class="container">

        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="tp-section-title-wrapper text-center mb-70">

                    <span class="tp-section-subtitle">
                        NUESTRA FORMA DE TRABAJAR
                    </span>

                    <h3 class="tp-section-title">
                        Diseño cuando importa.
                        <br>
                        Ingeniería donde realmente cuenta.
                    </h3>

                    <p>
                        Cada proyecto sigue un proceso claro. Nos enfocamos en
                        comprender el negocio, construir una solución sólida y
                        acompañar su crecimiento después del lanzamiento.
                    </p>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="tp-process-item">

                    <div class="tp-process-number">
                        01
                    </div>

                    <h4>Descubrimiento</h4>

                    <p>
                        Analizamos tus objetivos, procesos y necesidades para
                        definir la mejor estrategia tecnológica.
                    </p>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tp-process-item">

                    <div class="tp-process-number">
                        02
                    </div>

                    <h4>Diseño & Desarrollo</h4>

                    <p>
                        Construimos interfaces limpias y soluciones robustas
                        utilizando tecnologías modernas y escalables.
                    </p>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tp-process-item">

                    <div class="tp-process-number">
                        03
                    </div>

                    <h4>Crecimiento</h4>

                    <p>
                        Después de la entrega seguimos optimizando, agregando
                        funcionalidades y acompañando la evolución del proyecto.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- process-area-end -->

<!-- tpcta-area start -->
<section class="tpcta-area grey-bg pt-130 pb-150 p-relative">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xxl-12 col-xl-10 col-lg-10">
                <div class="tpcta-wrapper text-center">
                <h4 class="tpcta-title mb-40">El próximo proyecto destacado puede ser el tuyo.</h4>
                <div class="tpcta-button">
                    <a href="contact.html" class="tp-solid-btn">Hablemos de tu proyecto</a>
                </div>
                </div>
            </div>
        </div>
        <div class="tpcta__shape-star tpcta__shape-star-1">
            <svg width="19" height="17" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 0L17.1432 9.67376H27.3148L19.0858 15.6525L22.229 25.3262L14 19.3475L5.77101 25.3262L8.9142 15.6525L0.685208 9.67376H10.8568L14 0Z" fill="#1C99FE"/>
            </svg>
        </div>
        <div class="tpcta__shape-star tpcta__shape-star-2">
            <svg width="15" height="16" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 0L17.1432 9.67376H27.3148L19.0858 15.6525L22.229 25.3262L14 19.3475L5.77101 25.3262L8.9142 15.6525L0.685208 9.67376H10.8568L14 0Z" fill="#FD4766"/>
            </svg>
        </div>
    </div>
</section>
<!-- tpcta-area end -->

<!-- business-value-area start -->
<section class="business-value-area pt-120 pb-120">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8">

                <div class="tp-section-title-wrapper text-center mb-70">

                    <span class="tp-section-subtitle">
                        ¿POR QUÉ UNA SOLUCIÓN A LA MEDIDA?
                    </span>

                    <h2 class="tp-section-title">
                        Cuando el software se adapta a tu empresa,
                        los procesos comienzan a fluir.
                    </h2>

                    <p>
                        Las soluciones genéricas obligan a modificar la forma de trabajar.
                        Nosotros desarrollamos plataformas que se adaptan a tus procesos,
                        permitiéndote crecer sin cambiar la operación de tu empresa.
                    </p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-4">

                <div class="business-value-card">

                    <i class="fa-solid fa-bolt"></i>

                    <h4>Automatización</h4>

                    <p>
                        Reduce tareas repetitivas y permite que tu equipo dedique más tiempo a actividades estratégicas.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="business-value-card">

                    <i class="fa-solid fa-chart-column"></i>

                    <h4>Control</h4>

                    <p>
                        Centraliza la información y obtén indicadores en tiempo real para tomar mejores decisiones.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="business-value-card">

                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>

                    <h4>Escalabilidad</h4>

                    <p>
                        Desarrollamos plataformas preparadas para evolucionar conforme crecen tus procesos y tu negocio.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- business-value-area end -->

@endsection
