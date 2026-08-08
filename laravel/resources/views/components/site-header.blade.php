<!-- header area start -->
<header>
    <div class="tp-header-area box-plr-85">
    <div class="tp-header-area-inner" id="header-sticky">
        <div class="container-fluid p-relative">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="logo-dark">
                    <a href="{{route('home')}}">
                        <img src="{{asset('images/logo.png')}}" alt="logo">
                    </a>
                </div>
                <div class="logo-white">
                    <a href="{{route('home')}}">
                        <img src="{{asset('images/logoletrablanca.png')}}" alt="logo">
                    </a>
                </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-7 d-none d-lg-block">
                <div class="tpmenu text-center">
                    <nav id="mobile-menu">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Inicio</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">Nosotros</a>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Servicios</a>
                                <ul class="submenu">
                                    <li><a href="{{route('web')}}">Desarrollo web</a></li>
                                    <li><a href="{{route('branding')}}">Branding</a></li>
                                    <li><a href="{{route('enterprise-solutions')}}">Soluciones empresariales</a></li>
                                    <li><a href="{{route('software-apps')}}">Software & Apps</a></li>
                                </ul>
                            </li>
                            <li>    <a href="{{route('projects')}}">Proyectos</a></li>

                            <li>
                                <a href="{{route('contact')}}">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-6">
                    <div class="tp-header-right-2 d-flex align-items-center justify-content-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
<!-- header area end -->
