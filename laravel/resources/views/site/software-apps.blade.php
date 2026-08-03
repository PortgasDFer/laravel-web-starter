@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{ asset('images/webservice01.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Software & Apps</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{ route('home') }}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Software & Apps</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->

<!-- product-intro-area start -->
<section class="product-intro-area pt-140 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="product-intro-content">
                    <h2 class="tp-section-title mb-35">
                        Transformamos ideas en plataformas y aplicaciones preparadas para crecer.
                    </h2>
                    <p class="mb-25">
                        Desde una plataforma web hasta una aplicación móvil, desarrollamos soluciones digitales pensadas para resolver problemas reales y acompañar el crecimiento de tu negocio.
                    </p>
                    <p class="mb-35">
                        Cada proyecto comienza entendiendo el objetivo del producto, los usuarios que lo utilizarán y la experiencia que queremos ofrecer. A partir de ello diseñamos una solución escalable, segura y preparada para evolucionar con el tiempo.
                    </p>
                    <a href="{{ route('contact') }}" class="tp-solid-btn">
                        Cuéntanos tu idea
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="product-highlight">
                    <div class="highlight-box">
                        <span>Web</span>
                    </div>
                    <div class="highlight-box">
                        <span>Apps Móviles</span>
                    </div>
                    <div class="highlight-box">
                        <span>APIs REST</span>
                    </div>
                    <div class="highlight-box">
                        <span>Paneles Administrativos</span>
                    </div>
                    <div class="highlight-box">
                        <span>SaaS</span>
                    </div>
                    <div class="highlight-box">
                        <span>Integraciones</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="se-benefits-area pt-120 pb-120">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8">

                <div class="se-benefits-title text-center mb-80">

                    <span>SOFTWARE</span>

                    <h2>Una plataforma diseñada para impulsar el crecimiento de tu empresa.</h2>

                    <p>
                        No desarrollamos únicamente software. Construimos soluciones que mejoran
                        la operación diaria, conectan procesos, automatizan tareas y preparan a
                        tu empresa para crecer sin depender de múltiples herramientas.
                    </p>

                </div>

            </div>

        </div>

        <div class="se-diagram">

            <svg class="se-lines" viewBox="0 0 1000 700">

                <line x1="500" y1="350" x2="500" y2="120"></line>

                <line x1="500" y1="350" x2="820" y2="220"></line>

                <line x1="500" y1="350" x2="820" y2="480"></line>

                <line x1="500" y1="350" x2="500" y2="600"></line>

                <line x1="500" y1="350" x2="180" y2="480"></line>

                <line x1="500" y1="350" x2="180" y2="220"></line>

            </svg>

            <div class="se-core">

                <h3>Software</h3>

            </div>

            <div class="se-node se-top">

                <i class="fa-solid fa-rocket"></i>

                <h5>Escalabilidad</h5>

                <p>Preparado para crecer sin cambiar de plataforma.</p>

            </div>

            <div class="se-node se-right-top">

                <i class="fa-solid fa-cloud"></i>

                <h5>Infraestructura</h5>

                <p>Cloud, seguridad y alta disponibilidad.</p>

            </div>

            <div class="se-node se-right-bottom">

                <i class="fa-solid fa-gears"></i>

                <h5>Automatización</h5>

                <p>Procesos inteligentes que reducen tiempos y errores.</p>

            </div>

            <div class="se-node se-bottom">

                <i class="fa-solid fa-chart-line"></i>

                <h5>Rentabilidad</h5>

                <p>Mayor productividad y mejor control del negocio.</p>

            </div>

            <div class="se-node se-left-bottom">

                <i class="fa-solid fa-chart-pie"></i>

                <h5>Operación</h5>

                <p>Información en tiempo real para tomar decisiones.</p>

            </div>

            <div class="se-node se-left-top">

                <i class="fa-solid fa-plug"></i>

                <h5>Integraciones</h5>

                <p>Conecta APIs, ERPs, CRMs y sistemas existentes.</p>

            </div>

        </div>

    </div>

</section>

<section class="ai-section pt-140 pb-140">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8 text-center">

                <span class="ai-tag">
                    Inteligencia Artificial
                </span>

                <h2 class="ai-title">
                    Agrega capacidades inteligentes a tu plataforma.
                </h2>

                <p class="ai-description">

                    La IA no reemplaza tu negocio.
                    Lo potencia.

                    Integramos capacidades inteligentes dentro de tus sistemas para automatizar procesos,
                    analizar información y mejorar la experiencia de clientes y colaboradores.

                </p>

            </div>

        </div>



        <div class="ai-network">

            <svg class="ai-svg" viewBox="0 0 1000 1000">

                <line x1="500" y1="500" x2="500" y2="170"/>
                <line x1="500" y1="500" x2="810" y2="300"/>
                <line x1="500" y1="500" x2="810" y2="700"/>
                <line x1="500" y1="500" x2="500" y2="830"/>
                <line x1="500" y1="500" x2="190" y2="700"/>
                <line x1="500" y1="500" x2="190" y2="300"/>

            </svg>



            <div class="ai-core">

                <div class="core-ring"></div>

                <div class="core-content">

                    <h3>

                        IA

                    </h3>

                </div>

            </div>



            <div class="ai-item top">

                <i class="fa-solid fa-headset"></i>

                <h5>Asistentes</h5>

                <span>Atención inteligente</span>

            </div>



            <div class="ai-item top-right">

                <i class="fa-solid fa-magnifying-glass"></i>

                <h5>Búsquedas</h5>

                <span>Encuentra información</span>

            </div>



            <div class="ai-item bottom-right">

                <i class="fa-solid fa-gears"></i>

                <h5>Automatización</h5>

                <span>Procesos repetitivos</span>

            </div>



            <div class="ai-item bottom">

                <i class="fa-solid fa-chart-line"></i>

                <h5>Análisis</h5>

                <span>Reportes inteligentes</span>

            </div>



            <div class="ai-item bottom-left">

                <i class="fa-solid fa-chart-pie"></i>

                <h5>Predicción</h5>

                <span>Apoyo para decisiones</span>

            </div>



            <div class="ai-item top-left">

                <i class="fa-solid fa-file-lines"></i>

                <h5>Documentos</h5>

                <span>Lectura automática</span>

            </div>



        </div>



        <div class="row justify-content-center mt-80">

            <div class="col-xl-8 text-center">

                <h4 class="mb-25 text-white">

                    Cada empresa utiliza la Inteligencia Artificial de forma distinta.

                </h4>

                <p>

                    Analizamos tus procesos para identificar dónde la IA puede generar un beneficio real,
                    evitando implementaciones innecesarias y desarrollando únicamente las capacidades que aporten valor a tu operación.

                </p>

                <a href="{{ route('contact') }}" class="tp-solid-btn mt-30">

                    Explorar una solución con IA

                </a>

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
