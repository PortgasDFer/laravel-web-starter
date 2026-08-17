@extends('layouts.nerox')
@section('content')

<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{ asset('images/enterprise.webp')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Soluciones Empresariales</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{ route('home') }}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Soluciones Empresariales</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->
<!-- business-intro-area start -->
<section class="business-intro-area pt-140 pb-120">
    <div class="container">

        <div class="row align-items-center">

            <!-- Texto -->
            <div class="col-xl-7 col-lg-7">

                <div class="business-intro">

                    <h2 class="tp-section-title mb-35">
                        Tu empresa no necesita más trabajo.
                        <br>
                        <span>Necesita mejores procesos.</span>
                    </h2>

                    <p class="mb-25">
                        Conforme una empresa crece, también lo hacen sus procesos. Es común que la información termine distribuida entre hojas de cálculo, correos electrónicos y diferentes aplicaciones que no fueron diseñadas para trabajar en conjunto.
                    </p>

                    <p class="mb-25">
                        El resultado son tareas repetitivas, captura duplicada de información, reportes tardíos y una operación que depende demasiado del trabajo manual.
                    </p>

                    <p>
                        En AAF desarrollamos software empresarial a la medida para centralizar procesos, automatizar tareas y convertir la información de tu empresa en una herramienta para tomar mejores decisiones.
                    </p>

                </div>

            </div>

            <!-- Problemas -->
            <div class="col-xl-5 col-lg-5">

                <div class="business-problems">

                    <div class="problem-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Información dispersa entre diferentes herramientas.</span>
                    </div>

                    <div class="problem-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Procesos manuales que consumen tiempo.</span>
                    </div>

                    <div class="problem-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Duplicidad de información y errores de captura.</span>
                    </div>

                    <div class="problem-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Falta de indicadores para tomar decisiones.</span>
                    </div>

                    <div class="problem-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Sistemas que no se comunican entre sí.</span>
                    </div>

                    <div class="problem-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Procesos difíciles de escalar conforme crece la empresa.</span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- business-intro-area end -->

<section class="enterprise-services pt-120 pb-120">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8">

                <div class="tp-section-title-wrapper text-center mb-70">

                    <h2 class="tp-section-title">
                        Software diseñado para la forma en que trabaja tu empresa.
                    </h2>

                    <p>
                        Cada organización tiene procesos diferentes. Por eso desarrollamos
                        soluciones completamente personalizadas que se adaptan a la operación
                        de tu negocio, en lugar de obligar a tu empresa a adaptarse al software.
                    </p>

                </div>

            </div>

        </div>

        <div class="row">

            <!-- Tarjeta -->

            <div class="col-lg-4 col-md-6">

                <div class="tp-service-card">

                    <i class="fa-solid fa-chart-line"></i>

                    <h4>Paneles Administrativos</h4>

                    <p>
                        Gestiona información, usuarios y procesos desde una sola plataforma.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="tp-service-card">

                    <i class="fa-solid fa-diagram-project"></i>

                    <h4>Sistemas de Gestión</h4>

                    <p>
                        Automatiza procesos internos y elimina tareas repetitivas.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="tp-service-card">

                    <i class="fa-solid fa-users"></i>

                    <h4>CRM Empresarial</h4>

                    <p>
                        Organiza clientes, seguimientos y oportunidades comerciales.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="tp-service-card">

                    <i class="fa-solid fa-plug"></i>

                    <h4>APIs e Integraciones</h4>

                    <p>
                        Conecta aplicaciones y sistemas mediante servicios REST.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="tp-service-card">

                    <i class="fa-solid fa-chart-pie"></i>

                    <h4>Dashboards</h4>

                    <p>
                        Indicadores y reportes para tomar mejores decisiones.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="tp-service-card">

                    <i class="fa-solid fa-gears"></i>

                    <h4>Automatización</h4>

                    <p>
                        Reduce tiempos y mejora la eficiencia mediante procesos inteligentes.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- enterprise-cta-area start -->
<section class="enterprise-cta-area pt-130 pb-130">

    <div class="container">

        <div class="enterprise-cta">

            <div class="row align-items-center">

                <div class="col-xl-8 col-lg-8">

                    <span class="tp-section-subtitle">
                        CADA PROYECTO ES DIFERENTE
                    </span>

                    <h2 class="tp-section-title">
                        No desarrollamos software por paquetes.
                    </h2>

                    <p class="mb-25">
                        Cada empresa tiene procesos, objetivos y necesidades diferentes. Por ello, nuestras soluciones empresariales se diseñan completamente a la medida, después de analizar la operación de tu negocio y definir el alcance del proyecto.
                    </p>

                    <p>
                        Antes de elaborar una propuesta, realizamos una sesión de descubrimiento para comprender tus procesos, identificar oportunidades de mejora y definir la solución tecnológica más adecuada.
                    </p>

                </div>

                <div class="col-xl-4 col-lg-4">

                    <div class="enterprise-cta-box">

                        <span class="enterprise-label">
                            CONSULTORÍA INICIAL
                        </span>

                        <h3>
                            Sin costo
                        </h3>

                        <p>
                            Conversemos sobre tu proyecto. Analizaremos tus requerimientos y prepararemos una propuesta personalizada.
                        </p>

                        <a href="{{ route('contact') }}" class="tp-solid-btn w-100">
                            Solicitar asesoría
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
