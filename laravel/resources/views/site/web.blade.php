@extends('layouts.nerox')
@section('content')

<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{ asset('images/webservice01.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Desarrollo Web</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{ route('home') }}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Desarrollo Web</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->

<!-- services-details-area start -->
<div class="services-details-area pt-140 pb-105">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="services-sm-image w-img mb-45">
                <img src="{{asset('images/webservices02.jpg')}}" alt="services-sm-img">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="services-sm-image w-img mb-45">
                <img src="{{asset('images/webservices03.jpg')}}" alt="services-sm-img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <h4 class="services-d-title mb-25">Desarrollo Web que impulsa el crecimiento de tu empresa</h4>
                <p class="services-text mb-25">Hoy un sitio web es mucho más que una tarjeta de presentación. Es el primer contacto con tus clientes, una herramienta comercial y, en muchos casos, el principal canal para generar oportunidades de negocio.</p>
                <p class="services-text mb-45">En AAF Desarrollo Digital diseñamos y desarrollamos sitios web modernos, optimizados para buscadores y preparados para ofrecer una experiencia rápida desde cualquier dispositivo. Cada proyecto se construye pensando en el rendimiento, la seguridad y la facilidad de administración.</p>
                <p>
                    No utilizamos soluciones genéricas. Analizamos cada negocio para desarrollar una plataforma que refleje su identidad y contribuya al cumplimiento de sus objetivos comerciales.
                </p>
                <h5 class="services-sm-title mb-25">Un proceso claro. Resultados medibles.</h5>
                <p>Cada proyecto comienza entendiendo tu negocio, no escribiendo código. Nuestro proceso está diseñado para minimizar riesgos, mantener una comunicación constante y entregar una solución que realmente genere valor para tu empresa.
                </p>
                <div class="row mt-70">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="step-item text-center mb-30">
                        <div class="step-number-wrapper">
                            <span class="step-number">01</span>
                        </div>
                        <h6 class="step-title mt-40">Descubrimos tus objetivos</h6>
                        <p>Antes de desarrollar, entendemos tu negocio, tus clientes y lo que esperas conseguir con tu sitio web.</p>
                        <div class="step-item-shape shape-1">
                            <img src="{{asset('nerox/assets/img/shape/arrow-shape-1.png')}}" alt="arrow-shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="step-item text-center mb-30">
                        <div class="step-number-wrapper">
                            <span class="step-number">02</span>
                        </div>
                        <h6 class="step-title mt-40">Diseñamos la solución</h6>
                        <p>Creamos la estructura, experiencia de usuario y propuesta visual para que tu proyecto tenga una base sólida.</p>
                        <div class="step-item-shape shape-1 d-none d-lg-block">
                            <img src="{{asset('nerox/assets/img/shape/arrow-shape-2.png')}}" alt="arrow-shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="step-item text-center mb-30">
                        <div class="step-number-wrapper">
                            <span class="step-number">03</span>
                        </div>
                        <h6 class="step-title mt-40">Desarrollamos y optimizamos</h6>
                        <p>Construimos tu sitio utilizando tecnologías modernas, priorizando velocidad, seguridad, SEO y una excelente experiencia de navegación.</p>
                        <div class="step-item-shape shape-1">
                            <img src="{{asset('nerox/assets/img/shape/arrow-shape-1.png')}}" alt="arrow-shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="step-item text-center mb-30">
                        <div class="step-number-wrapper">
                            <span class="step-number">04</span>
                        </div>
                        <h6 class="step-title mt-40">Lanzamos y acompañamos</h6>
                        <p>Publicamos tu proyecto, realizamos pruebas finales y seguimos contigo para resolver dudas, implementar mejoras y apoyar su crecimiento.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services-details-area end -->

<!-- what we deliver start -->
<section class="tp-web-benefits pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">

            <!-- Texto -->
            <div class="col-xl-6 col-lg-6">
                <div class="tp-section-title-wrapper mb-40">

                    <h3 class="tp-section-title mb-30">
                        Mucho más que una página web.
                    </h3>

                    <p>
                        Cada proyecto que desarrollamos está pensado para convertirse
                        en una herramienta de negocio. Combinamos diseño, tecnología
                        y estrategia para crear sitios web rápidos, seguros y preparados
                        para generar resultados desde el primer día.
                    </p>

                    <p class="mt-25">
                        Nos encargamos de cada etapa del desarrollo para que puedas
                        concentrarte en hacer crecer tu empresa mientras nosotros
                        construimos una presencia digital sólida y profesional.
                    </p>

                </div>
            </div>

            <!-- Beneficios -->
            <div class="col-xl-6 col-lg-6">

                <div class="tp-web-benefits-list">

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Diseño personalizado alineado con la identidad de tu empresa.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Desarrollo responsivo para computadoras, tablets y móviles.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Optimización SEO para mejorar tu posicionamiento en Google.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Alto rendimiento y tiempos de carga optimizados.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Certificado SSL y buenas prácticas de seguridad.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Integración con WhatsApp, formularios y redes sociales.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Google Analytics y herramientas para medir resultados.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Capacitación básica para administrar tu sitio.</span>
                    </div>

                    <div class="tp-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Soporte posterior al lanzamiento y posibilidad de crecimiento futuro.</span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- what we deliver end -->

<!-- pricing cta start -->
<section class="tp-price-cta pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">

                <div class="tp-price-cta-box text-center">

                    <span class="tp-price-cta-subtitle">
                        INVERSIÓN Y PLANES
                    </span>

                    <h3 class="tp-price-cta-title">
                        ¿Quieres conocer cuánto podría costar tu proyecto?
                    </h3>

                    <p>
                        Cada empresa tiene necesidades diferentes. Hemos preparado
                        una guía con nuestros planes y rangos de inversión para ayudarte
                        a elegir la solución que mejor se adapte a tus objetivos.
                    </p>

                    <div class="tp-price-cta-btn mt-45">
                        <a href="{{route('pricingWeb')}}" class="tp-solid-btn">
                            Ver planes y precios
                        </a>
                    </div>

                    <small class="d-block mt-25">
                        ¿Necesitas una solución completamente personalizada?
                        También elaboramos propuestas a la medida.
                    </small>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- pricing cta end -->

@endsection
