@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{asset('images/faq.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Preguntas Frecuentes</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Preguntas Frecuentes</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->

<!-- faq-area start -->
<div class="faq-area pt-105 pb-140">
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <div class="faq-wrapper-1">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Qué tipo de proyectos desarrolla AAF Desarrollo Digital?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Desarrollamos sitios web corporativos, plataformas empresariales, sistemas internos, aplicaciones web, landing pages, migraciones tecnológicas e integraciones personalizadas, adaptándonos a las necesidades de cada cliente.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Trabajan con empresas de cualquier tamaño?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Sí. Colaboramos con emprendedores, pequeñas y medianas empresas, así como organizaciones que requieren soluciones digitales escalables y preparadas para crecer.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Pueden modernizar un sistema ya existente?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Sí. Contamos con experiencia en actualización de plataformas, migraciones tecnológicas y modernización de aplicaciones desarrolladas con versiones anteriores de diferentes tecnologías.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ¿Qué tecnologías utilizan?
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Trabajamos con tecnologías modernas como Laravel, Angular, React, Vue, .NET, C#, PHP, JavaScript, TypeScript, MySQL, SQL Server, AWS, Azure y otras herramientas según las necesidades de cada proyecto.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            ¿El desarrollo incluye diseño responsivo?
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Sí. Todos nuestros proyectos son desarrollados para ofrecer una experiencia óptima en computadoras, tablets y dispositivos móviles.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            ¿También ofrecen hosting y dominio?
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Sí. Podemos ayudarte con la contratación, configuración, migración y administración de hosting, dominios y certificados SSL.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            ¿Los proyectos incluyen medidas de seguridad?
                        </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Sí. Implementamos buenas prácticas de desarrollo, validación de datos, protección contra vulnerabilidades comunes y actualizaciones de seguridad.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            ¿Realizan reuniones durante el desarrollo?
                        </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Sí. Mantenemos una comunicación constante para compartir avances, resolver dudas y validar cada etapa del proyecto.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            ¿Mi plataforma podrá crecer en el futuro?
                        </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Sí. Diseñamos soluciones escalables preparadas para incorporar nuevas funcionalidades conforme evolucione tu negocio.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            ¿Por qué elegir AAF Desarrollo Digital?
                        </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body fq-body">
                            <p>Porque combinamos experiencia en desarrollo de software, tecnologías modernas y un enfoque personalizado para construir soluciones digitales seguras, escalables y orientadas a resultados.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item fq-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        ¿Optimizan los sitios para buscadores (SEO)?
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fq-body">
                        <p>Sí. Implementamos buenas prácticas de SEO técnico, optimización de rendimiento, estructura semántica y Core Web Vitals desde el desarrollo del proyecto.</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item fq-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        ¿Puedo solicitar funcionalidades específicas para mi proyecto?
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fq-body">
                        <p>Claro. Cada solución se desarrolla de forma personalizada, por lo que las funcionalidades se definen de acuerdo con los objetivos y procesos de cada empresa.</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item fq-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        ¿Ofrecen soporte después de la entrega?
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fq-body">
                        <p>Sí. Brindamos soporte técnico, mantenimiento evolutivo y mejoras continuas para garantizar que la plataforma siga funcionando correctamente y pueda crecer con tu negocio.</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item fq-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        ¿Cuánto tiempo tarda el desarrollo de un proyecto?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body fq-body">
                        <p>El tiempo depende del alcance y la complejidad. Después de analizar los requerimientos, proporcionamos una propuesta con tiempos estimados y un plan de trabajo claro.</p>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            ¿Cómo puedo solicitar una cotización?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fq-body">
                            <p>Roof strives for continual improvement safety, production, quality, profit and continued community service toYZ strives for continual improve ment in safety, production, quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            ¿Cómo inicia un proyecto con AAF Desarrollo Digital?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fq-body">
                            <p>Todo comienza con una reunión para comprender tus objetivos, analizar los requerimientos y definir la mejor solución tecnológica para tu empresa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fq-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed fq-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                            ¿El proyecto será de mi propiedad?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fq-body">
                            <p>Sí. Los entregables se definen desde el inicio y se especifican en la propuesta comercial para brindar total claridad.</p>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</div>
</div>
<!-- faq-area end -->


<section class="enterprise-cta pt-120 pb-120">
    <div class="container">

        <div class="enterprise-cta-box">

            <h2>
                ¿No encontraste la respuesta que buscabas?
            </h2>

            <p>
                Nuestro equipo estará encantado de resolver cualquier duda sobre tu proyecto, tecnologías, tiempos de desarrollo o proceso de trabajo.
            </p>

            <div class="enterprise-cta-buttons">
                <a href="{{ route('contact') }}" class="tp-border-btn">
                    Hablemos de tu proyecto
                </a>

            </div>

        </div>

    </div>
</section>

@endsection

