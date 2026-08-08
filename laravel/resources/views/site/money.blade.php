@extends('layouts.nerox')

@section('content')

<!-- breadcrumb -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay"
    data-background="{{ asset('images/money.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content text-center">
                    <h3 class="breadcrumb__title">Gana Dinero</h3>

                    <div class="breadcrumb__list">
                        <span><a href="{{ route('home') }}">Inicio</a></span>
                        <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                        <span>Gana Dinero</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero -->
<section class="pt-130 pb-120">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8 text-center">

                <h2 class="tp-section-title mb-30">
                    Convierte una recomendación en una recompensa.
                </h2>

                <p class="mb-45">
                    Si conoces una empresa o emprendedor que necesite un sitio web,
                    un sistema empresarial o una solución digital, recomiéndalo con
                    AAF Desarrollo Digital. Si el proyecto se concreta, recibirás una
                    bonificación por habernos conectado.
                </p>

                <a href="#referir" class="tp-solid-btn">
                    Quiero recomendar un proyecto
                </a>

            </div>

        </div>

    </div>
</section>

<!-- Cómo funciona -->

<section class="pt-40 pb-120">

    <div class="container">

        <div class="row">

            <div class="col-xl-12 text-center mb-70">

                <span class="tp-section-subtitle">
                    ¿CÓMO FUNCIONA?
                </span>

                <h3 class="tp-section-title">
                    Solo necesitas cuatro pasos.
                </h3>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6">

                <div class="tp-process-item">

                    <span>01</span>

                    <h4>Comparte un contacto</h4>

                    <p>
                        Envíanos los datos de la empresa o persona interesada.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="tp-process-item">

                    <span>02</span>

                    <h4>Nosotros hacemos el resto</h4>

                    <p>
                        Analizamos el proyecto, presentamos la propuesta y damos seguimiento.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="tp-process-item">

                    <span>03</span>

                    <h4>El proyecto se confirma</h4>

                    <p>
                        Cuando el cliente acepta y liquida el proyecto, tu referencia queda validada.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="tp-process-item">

                    <span>04</span>

                    <h4>Recibe tu bonificación</h4>

                    <p>
                        Te realizamos el pago correspondiente mediante transferencia bancaria.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Cuánto puedes ganar -->

<section class="grey-bg pt-120 pb-120">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="tp-section-subtitle">
                    TU RECOMENDACIÓN TIENE VALOR
                </span>

                <h3 class="tp-section-title mb-30">

                    Gana hasta
                    <span style="color:#7644FF;">
                        $500 MXN
                    </span>
                    por proyecto referido.

                </h3>

                <p>

                    Por cada proyecto contratado gracias a tu recomendación
                    recibirás una bonificación equivalente al <strong>5%</strong>
                    del valor total del proyecto, con un límite máximo de
                    <strong>$500 MXN</strong>.

                </p>

                <p>

                    Tú únicamente nos conectas con el cliente.
                    Nosotros nos encargamos del análisis,
                    la propuesta, el desarrollo y el seguimiento.

                </p>

            </div>

            <div class="col-lg-6">

                <div class="tpabout-image-2">

                    <img src="{{ asset('assets/img/about/tpabout-img.jpg') }}" alt="">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Servicios -->

<section class="pt-120 pb-120">

    <div class="container">

        <div class="row">

            <div class="col-xl-12 text-center mb-60">

                <span class="tp-section-subtitle">
                    SERVICIOS PARTICIPANTES
                </span>

                <h3 class="tp-section-title">

                    Por lanzamiento, puedes recomendar cualquiera de nuestros servicios.

                </h3>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-4">

                <ul class="tp-list">

                    <li>Desarrollo Web</li>

                    <li>Sistemas Empresariales</li>

                    <li>Landing Pages</li>

                </ul>

            </div>

            <div class="col-lg-4">

                <ul class="tp-list">

                    <li>Branding Digital</li>

                    <li>Optimización SEO</li>

                    <li>Consultoría Tecnológica</li>

                </ul>

            </div>

            <div class="col-lg-4">

                <ul class="tp-list">

                    <li>Tiendas en línea</li>

                    <li>Automatización</li>

                    <li>Software a la medida</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section id="referir" class="pb-130">

    <div class="container">

        <div class="tp-cta-wrapper text-center">

            <span class="tp-section-subtitle">

                ¿YA TIENES A ALGUIEN EN MENTE?

            </span>

            <h2 class="tp-section-title mb-25">

                Nosotros nos encargamos del resto.

            </h2>

            <p class="mb-40">

                Completa el formulario con los datos del prospecto y nosotros
                nos pondremos en contacto para conocer su proyecto.
                Si la contratación se concreta, recibirás tu bonificación.

            </p>

            <a href="{{ route('contact') }}" class="tp-solid-btn">

                Recomendar un proyecto

            </a>

        </div>

    </div>

</section>

@endsection
