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
                <h3 class="breadcrumb__title">Tecnologías</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{route('home')}}">Inicio</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Tecnologías</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->
<!--=================================
Technology Stack
==================================-->
<section class="tech-stack-area pt-120 pb-120">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-7">

                <div class="section-title-wrapper text-center">

                    <h2 class="tp-section-title">
                        Trabajamos con tecnologías modernas para construir soluciones escalables.
                    </h2>

                    <p class="tp-section-text">
                        Seleccionamos las herramientas adecuadas para cada proyecto,
                        priorizando rendimiento, mantenibilidad, seguridad y una
                        arquitectura preparada para crecer.
                    </p>

                </div>

            </div>

        </div>

        <div class="tech-grid">

            <div class="tech-item">
                <i class="devicon-laravel-original colored"></i>
                <span>Laravel</span>
            </div>

            <div class="tech-item">
                <i class="devicon-angularjs-plain colored"></i>
                <span>Angular</span>
            </div>

            <div class="tech-item">
                <i class="devicon-react-original colored"></i>
                <span>React</span>
            </div>

            <div class="tech-item">
                <i class="devicon-vuejs-plain colored"></i>
                <span>Vue</span>
            </div>

            <div class="tech-item">
                <i class="devicon-javascript-plain colored"></i>
                <span>JavaScript</span>
            </div>

            <div class="tech-item">
                <i class="devicon-typescript-plain colored"></i>
                <span>TypeScript</span>
            </div>

            <div class="tech-item">
                <i class="devicon-php-plain colored"></i>
                <span>PHP</span>
            </div>

            <div class="tech-item">
                <i class="devicon-dotnetcore-plain colored"></i>
                <span>.NET</span>
            </div>

            <div class="tech-item">
                <i class="devicon-csharp-plain colored"></i>
                <span>C#</span>
            </div>

            <div class="tech-item">
                <i class="devicon-java-plain colored"></i>
                <span>Java</span>
            </div>

            <div class="tech-item">
                <i class="devicon-bootstrap-plain colored"></i>
                <span>Bootstrap</span>
            </div>

            <div class="tech-item">
                <i class="devicon-tailwindcss-original colored"></i>
                <span>Tailwind CSS</span>
            </div>

            <div class="tech-item">
                <i class="devicon-css3-plain colored"></i>
                <span>CSS3</span>
            </div>

            <div class="tech-item">
                <i class="devicon-html5-plain colored"></i>
                <span>HTML5</span>
            </div>

            <div class="tech-item">
                <i class="devicon-mysql-plain colored"></i>
                <span>MySQL</span>
            </div>

            <div class="tech-item">
                <i class="devicon-microsoftsqlserver-plain colored"></i>
                <span>SQL Server</span>
            </div>

            <div class="tech-item">
                <i class="devicon-git-plain colored"></i>
                <span>Git</span>
            </div>

            <div class="tech-item">
                <i class="devicon-docker-plain colored"></i>
                <span>Docker</span>
            </div>

            <div class="tech-item">
                
            <i class="devicon-amazonwebservices-plain-wordmark colored"></i>
          
                <span>AWS</span>
            </div>

            <div class="tech-item">
                <i class="devicon-azure-plain colored"></i>
                <span>Azure</span>
            </div>

            <div class="tech-item">
                <i class="devicon-linux-plain colored"></i>
                <span>Linux</span>
            </div>

            <div class="tech-item">
                <i class="devicon-nginx-original colored"></i>
                <span>Nginx</span>
            </div>

            <div class="tech-item">
                <i class="devicon-apache-plain colored"></i>
                <span>Apache</span>
            </div>

            <div class="tech-item">
                <i class="fa-solid fa-server"></i>
                <span>cPanel</span>
            </div>

        </div>

    </div>

</section>

@endsection