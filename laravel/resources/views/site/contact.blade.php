@extends('layouts.nerox')
@section('content')
<!-- breadcrumb__area start -->
<section class="breadcrumb__area include-bg pt-140 pb-140 breadcrumb__overlay" data-background="{{ asset('images/contact1.webp')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">Hablemos de tu proyecto.</h3>
                <div class="breadcrumb__list">
                    <span><a href="index.html">Home</a></span>
                    <span class="dvdr"><i class="fa-light fa-colon"></i></span>
                    <span class="tp-current">Contactanos</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb__area end -->

<!-- contact area start -->
<section class="contact__area pt-115 pb-120">
    <div class="container">
        <div class="row">
            <div class="contact-intro mb-45">
                <h2 class="contact-intro__title">
                    Cuéntanos tu proyecto.
                </h2>

                <p class="contact-intro__text">
                    Cuéntanos qué necesitas. Analizaremos tu idea y te ayudaremos a encontrar la solución digital que mejor se adapte a tu empresa, objetivos y presupuesto.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-7 col-xl-7 col-lg-6">
                <div class="contact__wrapper">

                <div class="contact__form">
                    <form action="#" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="contact__form-input">
                                    <input
                                        type="text"
                                        name="name"
                                        placeholder="Nombre completo *"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact__form-input">
                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="Correo electrónico *"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact__form-input">
                                    <input
                                        type="text"
                                        name="company"
                                        placeholder="Empresa (opcional)">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact__form-input">
                                    <input
                                        type="tel"
                                        name="phone"
                                        placeholder="Teléfono (opcional)">
                                </div>
                            </div>

<div class="col-12">
    <div class="contact-service mb-35">

        <label class="contact-service__label">
            ¿Qué servicio te interesa?
        </label>

        <div class="contact-service__options">

            <label class="service-card">
                <input type="radio" name="service" value="Desarrollo Web">
                <span>Desarrollo Web</span>
            </label>

            <label class="service-card">
                <input type="radio" name="service" value="Software Empresarial">
                <span>Software Empresarial</span>
            </label>

            <label class="service-card">
                <input type="radio" name="service" value="Branding Digital">
                <span>Branding Digital</span>
            </label>

            <label class="service-card">
                <input type="radio" name="service" value="Consultoría Tecnológica">
                <span>Consultoría Tecnológica</span>
            </label>

            <label class="service-card">
                <input type="radio" name="service" value="No estoy seguro">
                <span>Aún no estoy seguro</span>
            </label>

        </div>

    </div>
</div>
                            <div class="col-12">
                                <div class="contact__form-input">
                                    <textarea
                                        name="message"
                                        rows="6"
                                        placeholder="Cuéntanos brevemente tu proyecto, objetivos o idea..."
                                        required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="contact__btn">
                                    <button type="submit" class="tp-solid-btn">
                                        Enviar consulta
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                <div class="contact__info white-bg p-relative z-index-1">
                <div class="contact__shape">
                    <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.png" alt="">
                    <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.png" alt="">
                </div>
                <div class="contact__info-inner white-bg">

    <!-- Ubicación -->
    <div class="contact__info-item d-flex align-items-start mb-35">
        <div class="contact__info-icon mr-15">
            <!-- SVG -->
        </div>

        <div class="contact__info-text">
            <h4>Ubicación</h4>

            <p>
                <a target="_blank"
                   href="https://maps.google.com">
                    Estado de México, México
                    <br>
                    Atención remota en todo el país.
                </a>
            </p>

        </div>
    </div>

    <!-- Correo -->
    <div class="contact__info-item d-flex align-items-start mb-35">
        <div class="contact__info-icon mr-15">
            <!-- SVG -->
        </div>

        <div class="contact__info-text">

            <h4>Correo electrónico</h4>

            <p>
                <a href="mailto:contacto@aafdesarrollodigital.com">
                    contacto@aafdesarrollodigital.com
                </a>
            </p>

            <p>
                <a href="mailto:ventas@aafdesarrollodigital.com">
                    ventas@aafdesarrollodigital.com
                </a>
            </p>

        </div>
    </div>

    <!-- Teléfono -->
    <div class="contact__info-item d-flex align-items-start mb-35">
        <div class="contact__info-icon mr-15">
            <!-- SVG -->
        </div>

        <div class="contact__info-text">

            <h4>Hablemos</h4>

            <p>
                <a href="tel:+525637487598">
                    +52 (56) 3748 7598
                </a>
            </p>

            <p>
                <a href="https://wa.me/525637487598" target="_blank"    rel="noopener noreferrer">
                    WhatsApp
                </a>
            </p>

        </div>
    </div>

    <!-- Horario -->
    <div class="contact__info-item d-flex align-items-start mb-35">
        <div class="contact__info-icon mr-15">
            <i class="fa-regular fa-clock"></i>
        </div>

        <div class="contact__info-text">

            <h4>Horario de atención</h4>

            <p>
                Lunes a Viernes
                <br>
                09:00 a 18:00 hrs.
            </p>

        </div>
    </div>

    <!-- Redes -->
    <div class="contact__social pl-30">

        <h4>Síguenos</h4>

        <ul>

            <li>
                <a href="#" class="fb">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>

            <li>
                <a href="#" class="tw">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </li>

            <li>
                <a href="#" class="pin">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>

        </ul>

    </div>

</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->
@endsection
