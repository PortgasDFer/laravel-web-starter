<!-- sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__wrapper">

        <!-- Cerrar -->
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>

        <div class="sidebar__content">

            <!-- Logo -->
            <div class="sidebar__logo mb-40">
                <a href="{{ route('home') }}">
                    <img
                        src="{{ asset('images/logo.webp') }}"
                        alt="AAF Desarrollo Digital"
                    >
                </a>
            </div>

            <!-- Navegación -->
            <div class="sidebar__menu">

                <nav>
                    <ul>

                        <li>
                            <a href="{{ route('home') }}">
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about') }}">
                                Nosotros
                            </a>
                        </li>

                        <li class="has-dropdown">
                            <a href="javascript:void(0)">
                                Servicios
                                <i class="fal fa-angle-down"></i>
                            </a>

                            <ul class="submenu">

                                <li>
                                    <a href="{{ route('web') }}">
                                        Desarrollo Web
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('branding') }}">
                                        Branding
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('enterprise-solutions') }}">
                                        Soluciones Empresariales
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('software-apps') }}">
                                        Software & Apps
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('custom-development') }}">
                                        Desarrollo a Medida
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('projects') }}">
                                Proyectos
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}">
                                Contacto
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

            <!-- Separador -->
            <div class="sidebar__divider"></div>

            <!-- Contacto -->
            <div class="sidebar__contact">

                <h4>Hablemos de tu proyecto</h4>

                <p>
                    ¿Tienes una idea o necesitas mejorar la presencia digital
                    de tu negocio? Estamos para ayudarte.
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="tp-btn"
                >
                    Contáctanos
                </a>

            </div>

            <!-- Redes -->
            <div class="sidebar__social mt-30">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=61593007580599" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/aafdesarrollodigital/" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>

<div class="body-overlay"></div>
<!-- sidebar area end -->
