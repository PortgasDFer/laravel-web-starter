@extends('layouts.nerox')
@section('content')
<!-- tp-minimal__area start -->
<section class="tp-minimal__area position-relative">
    <div class="tp-minimal__design-thumb" data-background="{{ asset('images/hero.jpg') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="tp-minimal__design pt-100 pb-100">
                    <div   div class="tp-minimal__design-wrapper">
                        <h2 class="tp-minimal__design-title">Software <br> <span>que funciona.</span></h2>
                        <p class="tpds-text">Soluciones digitales enfocadas en crecimiento y operación.</p>
                        <div class="tp-minimal__button mt-35">
                            <a href="{{ route('contact') }}" class="tp-solid-btn">Hablemos de tu proyecto</a>
                        </div>
                        <div class="tp-minimal__design-social mt-130">
                            <a href="https://www.facebook.com/profile.php?id=61593007580599"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tp-minimal__area end -->

<!-- tp-about-area start -->
<section  class="tpfrn-about-area pt-135 pb-110 p-relative">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-xl-5">
            <div class="tpfrn-about">
                <h4 class="tpfrn-about-title mb-30">Creamos tecnología que impulsa negocios.</h4>
                <p>En AAF Desarrollo Digital diseñamos, desarrollamos e implementamos soluciones tecnológicas para empresas que buscan optimizar procesos, fortalecer su presencia digital y crecer con herramientas creadas a la medida.
                </p>
                <p>Desde sitios web corporativos hasta plataformas empresariales, sistemas internos y aplicaciones, trabajamos con un enfoque en rendimiento, experiencia de usuario y escalabilidad.
                </p>
            </div>
            </div>
            <div class="col-xl-7">
            <div class="tpfrn-about-image s-about-img">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('images/index1.jpg') }}" class="ab-iamge mb-30" alt="about-img">
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('images/index2.jpg') }}" class="ab-iamge mb-30" alt="about-img">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- tp-about-area end -->

<!-- tpfrn-services-area start -->
<section class="tpfrn-services-area">
    <div class="container">
        <div class="tpfrn-services-wrapper pt-100 pb-85">
            <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tpservices tpservices-4 mb-30">
                    <div class="tpservices__icon mb-22">
                        <i class="flaticon-coding"></i>
                    </div>
                    <div class="tpservices__content">
                        <h4 class="tpservices__title mb-25"><a href="{{ route('web') }}">Desarrollo Web</a></h4>
                        <p>Sitios rápidos, seguros y optimizados para buscadores.</p>
                        <div class="tpservices__btn mt-30">
                        <a href="{{ route('web') }}">
                            <i class="flaticon-right-arrow-1"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tpservices tpservices-4 mb-30">
                    <div class="tpservices__icon mb-30">
                        <i class="flaticon-curve"></i>
                    </div>
                    <div class="tpservices__content">
                        <h4 class="tpservices__title mb-25"><a href="{{ route('enterprise-solutions')}}">Software empresarial</a></h4>
                        <p>Soluciones personalizadas para optimizar procesos y mejorar la eficiencia operativa.</p>
                        <div class="tpservices__btn mt-30">
                        <a href="{{ route('enterprise-solutions')}}">
                            <i class="flaticon-right-arrow-1"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tpservices tpservices-4 mb-30">
                    <div class="tpservices__icon mb-30">
                        <i class="flaticon-branding-2"></i>
                    </div>
                    <div class="tpservices__content">
                        <h4 class="tpservices__title mb-25"><a href="{{ route('branding')}}">Branding Digital</a></h4>
                        <p> Identidad visual, experiencia de usuario y presencia profesional.</p>
                        <div class="tpservices__btn mt-30">
                        <a href="{{ route('branding')}}">
                            <i class="flaticon-right-arrow-1"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tpservices tpservices-4 mb-30">
                    <div class="tpservices__icon mb-30">
                        <i class="flaticon-tools"></i>
                    </div>
                    <div class="tpservices__content">
                        <h4 class="tpservices__title mb-25"><a href="{{route('software-apps')}}">Software & Apps</a></h4>
                        <p>Te ayudamos a elegir la mejor solución para tu empresa.</p>
                        <div class="tpservices__btn mt-30">
                        <a href="{{route('software-apps')}}">
                            <i class="flaticon-right-arrow-1"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- tpfrn-services-area end -->


<!-- tpbs-project-area start -->
<div class="tpbs-project-area pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tpbs-section-wrapper text-center mb-30">
                <span class="tpbs-sub-title mb-15">Proyectos recientes.</span>
                <h3 class="tpbs-title">Soluciones que<span> ya están generando resultados.</span></h3>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="tpbs-project mb-50">
                <div class="tpbs-project__thumb mb-30">
                    <div class="tpbs-project__thumb-image">
                        <a href="{{route('projects')}}"><img src="{{ asset('images/proyecto-mini1.jpg')}}" alt="Alva Seguros Proyecto"></a>
                    </div>
                    <div class="tpbs-project__thumb-shape">
                        <img src="{{ asset('images/proyecto-mini1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="tpbs-project__content">
                    <span class="tpbs-project__category mb-10">DESARROLLO WEB · SEO</span>
                    <h4 class="tpbs-project__title"><a href="{{route('projects')}}">ALVA SEGUROS</a></h4>
                    <div class="tpbs-project-btn mt-20">
                        <a href="{{route('projects')}}" class="tpbs-btn-2">Más detalles <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="tpbs-project mb-50">
                <div class="tpbs-project__thumb mb-30">
                    <div class="tpbs-project__thumb-image">
                        <a href="{{route('projects')}}  "><img src="{{ asset('images/proyecto-mini3.jpg') }}" alt="Sitio Corporativo IT Cabling"></a>
                    </div>
                    <div class="tpbs-project__thumb-shape">
                        <img src="{{ asset('images/proyecto-mini3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="tpbs-project__content">
                    <span class="tpbs-project__category mb-10">SITIO WEB CORPORATIVO</span>
                    <h4 class="tpbs-project__title"><a href="{{route('projects')}}">IT Cabling</a></h4>
                    <div class="tpbs-project-btn mt-20">
                        <a href="{{route('projects')}}" class="tpbs-btn-2">Más detalles <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="tpbs-project mb-50">
                <div class="tpbs-project__thumb mb-30">
                    <div class="tpbs-project__thumb-image">
                        <a href="{{route('projects')}}  "><img src="{{ asset('images/proyecto-mini2.jpg') }}" alt="Plataforma de gestión de contenidos STASIA"></a>
                    </div>
                    <div class="tpbs-project__thumb-shape">
                        <img src="{{ asset('images/proyecto-mini2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="tpbs-project__content">
                    <span class="tpbs-project__category mb-10">SOFTWARE EMPRESARIAL</span>
                    <h4 class="tpbs-project__title"><a href="{{route('projects')}}">Stasia CMS</a></h4>
                    <div class="tpbs-project-btn mt-20">
                        <a href="{{route('projects')}}" class="tpbs-btn-2">Más detalles <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tpbs-project-area end -->

<!-- tpcta-area start -->
<section class="tpcta-area grey-bg pt-130 pb-150 p-relative">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xxl-12 col-xl-10 col-lg-10">
                <div class="tpcta-wrapper text-center">
                <h4 class="tpcta-title mb-40">El próximo proyecto destacado puede ser el tuyo.</h4>
                <div class="tpcta-button">
                    <a href="{{route('contact')}}" class="tp-solid-btn">Hablemos de tu proyecto</a>
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
@endsection
