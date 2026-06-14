<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Configuración</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.settings.edit')}}">
                                <span data-key="t-calendar">Editar configuración</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('pages.index') }}">
                        <i data-feather="layout"></i>
                        <span data-key="t-horizontal">Páginas</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                        <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                        <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                        <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                        <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                        <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                        <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                        <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                        <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                        <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                        <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                        <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                        <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="layouts-horizontal.html">
                        <i data-feather="layout"></i>
                        <span data-key="t-horizontal">Horizontal</span>
                    </a>
                </li>
            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Stasia se adapta a ti</h5>
                        <p class="font-size-13">Solicita nuevos módulos, automatizaciones o mejoras para adaptar la plataforma a tu negocio.</p>
                        <a href="#!" class="btn btn-primary mt-2">Solicitar mejora </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
