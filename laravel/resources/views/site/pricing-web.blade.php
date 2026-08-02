@extends('layouts.nerox')
@section('content')
<!-- Hero Pricing -->
<section class="pricing-hero pt-170 pb-140">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">

                <div class="pricing-hero__content text-center">

                    <span class="pricing-hero__subtitle">
                        PLANES Y PRECIOS
                    </span>

                    <h1 class="pricing-hero__title">
                        Elige el plan ideal
                        <br>
                        para hacer crecer tu empresa.
                    </h1>

                    <p class="pricing-hero__text">
                        Nuestros planes están diseñados para cubrir diferentes etapas de crecimiento.
                        Desde una landing page para captar clientes hasta plataformas empresariales
                        completamente personalizadas. Si tu proyecto requiere algo específico,
                        prepararemos una propuesta a tu medida.
                    </p>

                    <div class="pricing-hero__buttons">

                        <a href="#planes" class="tp-solid-btn">
                            Ver planes
                        </a>

                        <a href="#"
                           class="tp-border-btn ml-20">
                            Solicitar cotización
                        </a>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<!-- Pricing Area -->
<section class="pricing__area pt-130 pb-120" id="planes">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section__title-wrapper text-center mb-70">

                    <span class="section__subtitle">
                        PLANES E INVERSIÓN
                    </span>

                    <h2 class="section__title">
                        Soluciones adaptadas al tamaño de tu proyecto.
                    </h2>

                    <p>
                        Desde una landing page hasta plataformas empresariales
                        completamente personalizadas. Todos nuestros planes
                        incluyen diseño profesional, optimización para
                        buscadores y acompañamiento durante el desarrollo.
                    </p>

                </div>
            </div>
        </div>

        <div class="row">

            <!-- PLAN 1 -->
            <div class="col-lg-4 col-md-6 mb-30">

                <div class="pricing-card">

                    <span class="pricing-type">
                        ESENCIAL
                    </span>

                    <h3>
                        Landing Page
                    </h3>

                    <p class="pricing-text">
                        Ideal para negocios que buscan comenzar su presencia digital.
                    </p>

                    <div class="pricing-price">

                        <span class="old-price">
                            $6,000
                        </span>

                        <h2>
                            $4,500
                        </h2>

                    </div>

                    <ul>

                        <li>Diseño personalizado y responsive</li>
                        <li>Hasta 5 secciones</li>
                        <li>Formulario de contacto</li>
                        <li>Botón de WhatsApp</li>
                        <li>SEO básico</li>
                        <li>Dominio + Hosting por 1 año</li>
                        <li>Certificado SSL</li>
                        <li>Entrega en 3 a 5 días hábiles</li>

                    </ul>

                    <a href="#" class="tp-solid-btn w-100 text-center">
                        Quiero este plan
                    </a>

                </div>

            </div>

            <!-- PLAN 2 -->
            <div class="col-lg-4 col-md-6 mb-30">

                <div class="pricing-card featured">

                    <span class="pricing-badge">
                        Más solicitado
                    </span>

                    <span class="pricing-type">
                        PROFESIONAL
                    </span>

                    <h3>
                        Sitio Corporativo
                    </h3>

                    <p class="pricing-text">
                        Pensado para empresas que necesitan una presencia digital sólida.
                    </p>

                    <div class="pricing-price">

                        <span class="old-price">
                            $8,500
                        </span>

                        <h2>
                            $6,000
                        </h2>

                    </div>

                    <ul>

                        <li>Hasta 7 secciones</li>
                        <li>Diseño profesional</li>
                        <li>Formulario avanzado</li>
                        <li>WhatsApp integrado</li>
                        <li>SEO inicial</li>
                        <li>Panel básico de administración</li>
                        <li>Google Maps</li>
                        <li>Hasta 3 correos corporativos</li>
                        <li>Dominio + Hosting por 1 año</li>
                        <li>Soporte preventivo</li>
                        <li>Entrega de 5 a 10 días hábiles</li>

                    </ul>

                    <a href="#" class="tp-solid-btn w-100 text-center">
                        Solicitar propuesta
                    </a>

                </div>

            </div>

            <!-- PLAN 3 -->
            <div class="col-lg-4 col-md-6 mb-30">

                <div class="pricing-card">

                    <span class="pricing-type">
                        EMPRESARIAL
                    </span>

                    <h3>
                        Desarrollo a Medida
                    </h3>

                    <p class="pricing-text">
                        Sistemas diseñados específicamente para las necesidades de tu empresa.
                    </p>

                    <div class="pricing-price">

                        <span class="old-price">
                            Desde $12,000
                        </span>

                        <h2>
                            Desde $10,000
                        </h2>

                    </div>

                    <ul>

                        <li>Arquitectura personalizada</li>
                        <li>Panel administrativo</li>
                        <li>Roles y permisos</li>
                        <li>Integración con APIs</li>
                        <li>Automatización de procesos</li>
                        <li>Reportes y métricas</li>
                        <li>Base de datos centralizada</li>
                        <li>Preparado para crecimiento</li>
                        <li>Dominio + Hosting por 1 año</li>
                        <li>Soporte preventivo</li>
                        <li>Cotización personalizada</li>

                    </ul>

                    <a href="#" class="tp-solid-btn w-100 text-center">
                        Hablar con un asesor
                    </a>

                </div>

            </div>

        </div>

        <div class="row mt-80">

            <div class="col-xl-8 offset-xl-2">

                <div class="pricing-bottom text-center">

                    <h3>
                        ¿Necesitas una solución diferente?
                    </h3>

                    <p>
                        Si tu proyecto requiere funcionalidades específicas,
                        integración con otros sistemas o un desarrollo completamente
                        personalizado, elaboraremos una propuesta adaptada a tus
                        objetivos y presupuesto.
                    </p>

                    <a href="#" class="tp-border-btn">
                        Solicitar cotización personalizada
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
@endsection
