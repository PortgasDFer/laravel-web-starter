@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/about1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Branding e Identidad</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Branding e Identidad</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->
<!-- brand story area start -->
<section class="brand-story-area pt-140 pb-130">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-xl-6 col-lg-6">

                <div class="brand-story-content">


                    <h2>
                        Cada marca tiene su momento. El tuyo es ahora.
                    </h2>

                    <p>

                        En <strong>AAF Desarrollo Digital</strong> creemos que una identidad sólida es el primer paso para construir una presencia digital memorable. Por ello, el área de Branding e Identidad se desarrolla en colaboración con <strong>StudioTori</strong>, un estudio creativo especializado en diseño gráfico e identidad de marca con más de cinco años de experiencia.

                    </p>

                    <p>

                        Su nombre representa exactamente su filosofía. <strong>Tori</strong> es un portal, un umbral que marca el inicio de algo más grande para una marca. Es el momento en que una idea deja de ser solo un concepto para convertirse en una identidad capaz de transmitir confianza, personalidad y propósito.

                    </p>

                    <blockquote>

                        No somos una agencia de campañas publicitarias masivas; somos el estudio que se sienta contigo a construir la esencia de lo que eres como negocio.

                    </blockquote>

                </div>

            </div>

            <div class="col-xl-6 col-lg-6">

                <div class="brand-journey">

                    <div class="journey-step">
                        <span>01</span>
                        <h5>Idea</h5>
                        <p>Todo comienza con una visión.</p>
                    </div>

                    <div class="journey-line"></div>

                    <div class="journey-step active">
                        <span>⛩</span>
                        <h5>Torii</h5>
                        <p>El momento donde una idea cruza hacia una identidad.</p>
                    </div>

                    <div class="journey-line"></div>

                    <div class="journey-step">
                        <span>02</span>
                        <h5>Marca</h5>
                        <p>Una identidad sólida, coherente y memorable.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="brand-values-area pt-130 pb-130">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8 text-center">

                <span class="brand-values-tag">

                    NUESTRA FORMA DE TRABAJAR

                </span>

                <h2>

                    No diseñamos únicamente una identidad.
                    Construimos la forma en que una marca será recordada.

                </h2>

            </div>

        </div>


        <div class="brand-values">

            <div class="brand-value">

                <div class="brand-value-number">

                    01

                </div>

                <div class="brand-value-content">

                    <h3>

                        Más de cinco años
                        construyendo marcas.

                    </h3>

                    <p>

                        La experiencia nos ha enseñado que cada proyecto necesita una identidad propia. No trabajamos con fórmulas repetidas; cada marca comienza desde cero.

                    </p>

                </div>

            </div>


            <div class="brand-value">

                <div class="brand-value-number">

                    02

                </div>

                <div class="brand-value-content">

                    <h3>

                        Entendemos antes
                        de diseñar.

                    </h3>

                    <p>

                        Antes de hablar de colores o tipografías, entendemos el negocio, sus objetivos y la historia que desea comunicar.

                    </p>

                </div>

            </div>


            <div class="brand-value">

                <div class="brand-value-number">

                    03

                </div>

                <div class="brand-value-content">

                    <h3>

                        Diseñamos para
                        permanecer.

                    </h3>

                    <p>

                        Una identidad bien construida debe mantenerse vigente, crecer junto con la empresa y seguir representándola con el paso del tiempo.

                    </p>

                </div>

            </div>


            <div class="brand-value">

                <div class="brand-value-number">

                    04

                </div>

                <div class="brand-value-content">

                    <h3>

                        Del concepto
                        al resultado.

                    </h3>

                    <p>

                        Acompañamos cada etapa del proyecto, desde la construcción de la identidad hasta la producción gráfica, impresión y materiales finales cuando el proyecto lo requiere.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="brand-creative-board">

    <!-- IMÁGENES -->

    <img src="{{ asset('sitio/img/branding/mockup-logo.webp') }}"
         alt="Branding"
         class="creative-image img-logo">

    <img src="{{ asset('sitio/img/branding/editorial.webp') }}"
         alt="Editorial"
         class="creative-image img-editorial">

    <img src="{{ asset('sitio/img/branding/branding-colors.webp') }}"
         alt="Paleta"
         class="creative-image img-colors">

    <img src="{{ asset('sitio/img/branding/fotografia.webp') }}"
         alt="Fotografía"
         class="creative-image img-photo">

    <img src="{{ asset('sitio/img/branding/business-card.webp') }}"
         alt="Tarjetas"
         class="creative-image img-card">

    <img src="{{ asset('sitio/img/branding/packaging.webp') }}"
         alt="Packaging"
         class="creative-image img-packaging">


    <!-- TEXTO -->

    <div class="creative-item item-logo">

        <span>Identidad</span>

        <h4>Creación de marca</h4>

        <p>
            Logotipo, sistema visual, colores, tipografía y manual de marca.
        </p>

    </div>


    <div class="creative-item item-editorial">

        <span>Editorial</span>

        <h4>Catálogos · Revistas · Brochures</h4>

    </div>


    <div class="creative-item item-design">

        <span>Diseño</span>

        <h4>Material gráfico y comunicación visual</h4>

    </div>


    <div class="creative-item item-photo">

        <span>Fotografía</span>

        <h4>Producto · Marca Personal</h4>

    </div>


    <div class="creative-item item-print">

        <span>Producción</span>

        <h4>Impresión profesional</h4>

    </div>


    <div class="creative-item item-marketing">

        <span>Estrategia</span>

        <h4>Marketing e identidad</h4>

    </div>


    <div class="creative-item item-tax">

        <span>Facturación</span>

        <h4>Servicios contables</h4>

    </div>

</div>


<section class="branding-connect-area pt-130 pb-130">

    <div class="container">

        <div class="row align-items-center">

            <!-- Texto -->

            <div class="col-lg-7">

                <h2>

                    ¿Quieres conocer más del trabajo de StudioTori?

                </h2>

                <p>

                    Descubre proyectos de identidad visual, diseño editorial, fotografía y material gráfico desarrollados para empresas y emprendedores. Si buscas construir una marca sólida, también puedes comunicarte directamente con el estudio para resolver cualquier duda o solicitar una propuesta.

                </p>

                <div class="branding-links">

                    <a href="https://www.behance.net/StudioToriMX"
                       target="_blank"
                       class="branding-link">

                        <i class="fa-brands fa-behance"></i>

                        Explorar portafolio en Behance

                    </a>

                    <a href="https://wa.me/525585578995"
                       target="_blank"
                       class="branding-link">

                        <i class="fa-brands fa-whatsapp"></i>

                        WhatsApp · 55 8557 8995

                    </a>

                    <a href="https://www.facebook.com/studiotorimx/"
                       target="_blank"
                       class="branding-link">

                        <i class="fa-brands fa-facebook-f"></i>

                        Facebook / StudioToriMX

                    </a>

                    <a href="https://instagram.com/studiotorimx"
                       target="_blank"
                       class="branding-link">

                        <i class="fa-brands fa-instagram"></i>

                        Instagram / @StudioToriMX

                    </a>

                </div>

            </div>


            <!-- Lado derecho -->

            <div class="col-lg-5">

                <div class="branding-highlight">

                    <span>

                        Más de

                    </span>

                    <h2>

                        5 años

                    </h2>

                    <p>

                        creando marcas, desarrollando identidades visuales y acompañando empresas en la construcción de una imagen profesional.

                    </p>

                    <a href="https://www.behance.net/StudioToriMX"
                       target="_blank"
                       class="tp-btn">

                        Ver proyectos

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- branding cta start -->
<section class="branding-final-cta pt-130 pb-130">

    <div class="container">

        <div class="branding-final-box">

            <span class="branding-final-subtitle">

                EL SIGUIENTE PASO DE TU MARCA

            </span>

            <h2>

                Toda gran marca comienza
                cruzando un nuevo umbral.

            </h2>

            <p>

                Si estás comenzando un nuevo proyecto o sientes que tu identidad ya no representa lo que tu empresa es hoy, este puede ser el momento de construir una marca preparada para crecer. En AAF Desarrollo Digital, junto con StudioTori, convertimos ideas en identidades sólidas, coherentes y memorables.

            </p>

            <div class="branding-final-buttons">

                <a href="{{ route('contact') }}" class="tp-solid-btn">

                    Hablemos de tu marca

                </a>

                <a href="https://www.behance.net/StudioToriMX"
                   target="_blank"
                   class="branding-outline-btn">

                    Ver portafolio

                </a>

            </div>

        </div>

    </div>

</section>
<!-- branding cta end -->
@endsection