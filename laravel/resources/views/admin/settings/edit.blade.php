<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Bienvenido | Configuración Inicial</title>
    @vite([
        'resources/css/app.css',
        'resources/css/setup.css',
        'resources/js/app.js',
        'resources/js/setup.js'
    ])
</head>
<body>

<div class="setup-container">

    <div class="layout">

        <!-- Sidebar -->
        <aside class="sidebar">

            <h1>Stasia</h1>



            <p class="subtitle">
                Edita la configuración de tu sitio.
            </p>

            <div class="steps">

                <div id="menu-step-1">🚀 Bienvenida</div>
                <div id="menu-step-2">🏢 Negocio</div>
                <div id="menu-step-3">📞 Contacto</div>
                <div id="menu-step-4">🎉 Finalizar</div>

            </div>

            <div class="progress-container">

                <div class="progress-bar">
                    <div id="progress"></div>
                </div>

                <p>Progreso</p>

            </div>
            
            <div class="divider"></div>  

            <div class="steps">
                <a href="{{ route('dashboard') }}">Regresar al Dashboard</a>
            </div>

            <!-- Logo inferior -->
            <div class="sidebar-footer">

                <img
                    src="{{ asset('images/logo400.png') }}"
                    alt="Stasia"
                    class="logo-sidebar">

                <p>
                    La base digital para negocios que quieren crecer.
                </p>

            </div>

        </aside>

        <!-- Contenido -->
        <main class="content">

            <div class="form-wrapper">
                @if ($errors->any())

                    <div class="alert alert-danger">

                        <strong>Se encontraron errores:</strong>

                        <ul class="mb-0 mt-2">

                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>

                    </div>

                @endif

                <form method="POST" action="{{ route('setup.store') }}">

                    @csrf

                    <!-- PASO 1 -->
                    <section id="step1" class="step active">

                        <div class="welcome-container">

                            <img
                                src="{{ asset('images/setup-welcome.png') }}"
                                alt="Configuración Inicial"
                                class="welcome-image">

                            <h1 class="welcome-title">
                                Bienvenido a Stasia 🚀
                            </h1>

                            <p class="welcome-description">
                                Configura tu negocio, datos de contacto y presencia digital
                                en menos de 3 minutos.
                            </p>

                            <div class="welcome-features">

                                <div class="feature-item">
                                    ✓ Sitio adaptable
                                </div>

                                <div class="feature-item">
                                    ✓ WhatsApp integrado
                                </div>

                                <div class="feature-item">
                                    ✓ Optimizado para SEO
                                </div>

                            </div>

                            <button
                                type="button"
                                onclick="nextStep(2)"
                                class="btn-start">

                                Comenzar configuración

                            </button>

                        </div>

                    </section>

                    <!-- PASO 2 -->
                    <section id="step2" class="step">

                        <h2>🏢 Información del negocio</h2>

                        <input
                            type="text"
                            id="site_name"
                            name="site_name"
                            placeholder="Nombre del negocio"
                            value="{{ old('site_name', $setting->site_name ?? '') }}">
                            

                        <textarea
                            id="site_description"
                            name="site_description"
                            placeholder="Descripción">{{ old('site_description', $setting->site_description ?? '') }}</textarea>

                        <input
                            type="text"
                            id="address"
                            name="address"
                            placeholder="Dirección del negocio"
                            value="{{ old('address', $setting->address ?? '') }}">

                        <input
                            type="text"
                            id="google_maps"
                            name="google_maps"
                            placeholder="Enlace Google Maps"
                            value="{{ old('google_maps', $setting->google_maps ?? '') }}">

                        <h2>📱 Redes sociales</h2>

                        <input
                            type="text"
                            id="facebook"
                            name="facebook"
                            placeholder="Facebook"
                            value="{{ old('facebook', $setting->facebook ?? '') }}">

                        <input
                            type="text"
                            id="instagram"
                            name="instagram"
                            placeholder="Instagram"
                            value="{{ old('instagram', $setting->instagram ?? '') }}">

                        <input
                            type="text"
                            id="Youtube"
                            name="Youtube"
                            placeholder="Youtube"
                            value="{{ old('youtube', $setting->youtube ?? '') }}">


                        <div class="buttons">

                            <button type="button" onclick="nextStep(1)">
                                Atrás
                            </button>

                            <button type="button" onclick="nextStep(3)">
                                Continuar
                            </button>

                        </div>

                    </section>

                    <!-- PASO 3 -->
                    <section id="step3" class="step">

                        <h2>📞 Contacto</h2>

                        <input type="email" id="email" name="email" placeholder="Correo" value="{{ old('email', $setting->email ?? '') }}">

                        <input type="text" id="phone" name="phone" placeholder="Teléfono" value="{{ old('phone', $setting->phone ?? '') }}">

                        <input type="text" id="whatsapp" name="whatsapp" placeholder="WhatsApp" value="{{ old('whatsapp', $setting->whatsapp ?? '') }}">


                        <h2>🖼 Logo y Favicon</h2>

                        <div class="form-group">

                            <label class="form-label">
                                Logo del negocio
                            </label>

                            <label for="logo" class="file-upload">

                                <div class="preview-container">

                                    <img
                                        id="preview-image"
                                        src="{{ asset('images/default-logo.png') }}"
                                        alt="Vista previa">

                                </div>

                                <div class="file-content">

                                    <strong>Seleccionar logo</strong>

                                    <p>
                                        PNG, JPG o WEBP (Máx. 2MB)
                                    </p>

                                    <span id="file-name">
                                        Ningún archivo seleccionado
                                    </span>

                                </div>

                            </label>

                            <input
                                type="file"
                                id="logo"
                                name="logo"
                                accept="image/*"
                                hidden>

                        </div>


                        <div class="form-group">

                            <label class="form-label">
                                Favicon del sitio
                            </label>

                            <label for="favicon" class="file-upload favicon-upload">

                                <div class="favicon-preview-container">

                                    <img
                                        id="favicon-preview"
                                        src="{{ asset('images/default-favicon.png') }}"
                                        alt="Favicon">

                                </div>

                                <div class="file-content">

                                    <strong>Seleccionar favicon</strong>

                                    <p>
                                        Recomendado: 512x512 px (.png)
                                    </p>

                                    <span id="favicon-name">
                                        Ningún archivo seleccionado
                                    </span>

                                </div>

                            </label>

                            <input
                                type="file"
                                id="favicon"
                                name="favicon"
                                accept="image/png,image/x-icon,image/vnd.microsoft.icon"
                                hidden>

                        </div>

                        <div class="buttons">

                            <button type="button" onclick="nextStep(2)">
                                Atrás
                            </button>

                            <button type="button" onclick="nextStep(4)">
                                Continuar
                            </button>

                        </div>

                    </section>

                    <!-- PASO 4 -->
                    <section id="step4" class="step">

                        <h2>🎉 Todo listo</h2>

                        <div class="summary">

                            <p id="preview_name"></p>

                            <p id="preview_description"></p>

                            <p id="preview_email"></p>

                            <p id="preview_phone"></p>

                            <p id="preview_whatsapp"></p>

                        </div>

                        <div class="buttons">
                            <button type="button" onclick="nextStep(3)">
                                Atrás
                            </button>

                            <button type="submit" class="success">
                                Finalizar
                            </button>
                        </div>
                    </section>
                </form>
            </div>
        </main>
    </div>
</div>
</body>
</html>
