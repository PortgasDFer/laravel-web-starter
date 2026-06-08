<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración Inicial</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100">

<div
    x-data="{
        step: 1,

        site_name: '',
        site_description: '',
        email: '',
        phone: '',
        whatsapp: '',

        progress() {
            return ((this.step - 1) / 3) * 100;
        }
    }"
    class="min-h-screen">

    <div class="grid lg:grid-cols-12 min-h-screen">

        <!-- SIDEBAR -->
        <aside class="lg:col-span-3 bg-slate-900 text-white p-10 flex flex-col">

            <div>
                <h1 class="text-3xl font-bold">
                    Laravel Starter
                </h1>

                <p class="text-slate-400 mt-2">
                    Configuración inicial
                </p>
            </div>

            <div class="mt-16 space-y-6">

                <div class="flex items-center gap-3">
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center"
                        :class="step >= 1 ? 'bg-indigo-600' : 'bg-slate-700'">
                        1
                    </div>

                    <span :class="step >= 1 ? 'text-white' : 'text-slate-500'">
                        Bienvenida
                    </span>
                </div>

                <div class="flex items-center gap-3">
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center"
                        :class="step >= 2 ? 'bg-indigo-600' : 'bg-slate-700'">
                        2
                    </div>

                    <span :class="step >= 2 ? 'text-white' : 'text-slate-500'">
                        Negocio
                    </span>
                </div>

                <div class="flex items-center gap-3">
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center"
                        :class="step >= 3 ? 'bg-indigo-600' : 'bg-slate-700'">
                        3
                    </div>

                    <span :class="step >= 3 ? 'text-white' : 'text-slate-500'">
                        Contacto
                    </span>
                </div>

                <div class="flex items-center gap-3">
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center"
                        :class="step >= 4 ? 'bg-indigo-600' : 'bg-slate-700'">
                        4
                    </div>

                    <span :class="step >= 4 ? 'text-white' : 'text-slate-500'">
                        Finalizar
                    </span>
                </div>

            </div>

            <div class="mt-auto">

                <div class="h-2 bg-slate-700 rounded-full overflow-hidden">

                    <div
                        class="h-full bg-indigo-500 transition-all duration-700 ease-out"
                        :style="`width:${progress()}%`">
                    </div>

                </div>

                <p class="text-sm text-slate-400 mt-3">
                    Configuración inicial
                </p>

            </div>

        </aside>

        <!-- CONTENIDO -->
        <main class="lg:col-span-9 flex items-center justify-center p-8">

            <form
                method="POST"
                action="{{ route('setup.store') }}"
                class="w-full max-w-5xl">

                @csrf

                <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

                    <div class="grid lg:grid-cols-2">

                        <!-- FORM -->
                        <div class="p-10">

                            <div class="relative overflow-hidden">

                                <div
                                    class="flex transition-transform duration-500 ease-out"
                                    :style="`transform: translateX(-${(step - 1) * 100}%);`">

                                    <!-- PASO 1 -->
                                    <section class="min-w-full">

                                        <h2 class="text-4xl font-bold">
                                            Bienvenido 👋
                                        </h2>

                                        <p class="mt-4 text-gray-500 text-lg">
                                            Vamos a configurar tu negocio en menos de 3 minutos.
                                        </p>

                                        <div class="mt-10">

                                            <button
                                                type="button"
                                                @click="step = 2"
                                                class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl transition">

                                                Comenzar

                                            </button>

                                        </div>

                                    </section>

                                    <!-- PASO 2 -->
                                    <section class="min-w-full">

                                        <h2 class="text-3xl font-bold">
                                            Información del negocio
                                        </h2>

                                        <div class="mt-8 space-y-4">

                                            <input
                                                x-model="site_name"
                                                name="site_name"
                                                placeholder="Nombre del negocio"
                                                class="w-full border rounded-xl p-4">

                                            <textarea
                                                x-model="site_description"
                                                name="site_description"
                                                placeholder="Descripción"
                                                rows="5"
                                                class="w-full border rounded-xl p-4"></textarea>

                                        </div>

                                        <div class="mt-8 flex justify-between">

                                            <button
                                                type="button"
                                                @click="step = 1">
                                                Atrás
                                            </button>

                                            <button
                                                type="button"
                                                @click="step = 3"
                                                class="bg-indigo-600 text-white px-5 py-3 rounded-xl">

                                                Continuar

                                            </button>

                                        </div>

                                    </section>

                                    <!-- PASO 3 -->
                                    <section class="min-w-full">

                                        <h2 class="text-3xl font-bold">
                                            Información de contacto
                                        </h2>

                                        <div class="mt-8 space-y-4">

                                            <input
                                                x-model="email"
                                                name="email"
                                                type="email"
                                                placeholder="Correo"
                                                class="w-full border rounded-xl p-4">

                                            <input
                                                x-model="phone"
                                                name="phone"
                                                placeholder="Teléfono"
                                                class="w-full border rounded-xl p-4">

                                            <input
                                                x-model="whatsapp"
                                                name="whatsapp"
                                                placeholder="WhatsApp"
                                                class="w-full border rounded-xl p-4">

                                        </div>

                                        <div class="mt-8 flex justify-between">

                                            <button
                                                type="button"
                                                @click="step = 2">
                                                Atrás
                                            </button>

                                            <button
                                                type="button"
                                                @click="step = 4"
                                                class="bg-indigo-600 text-white px-5 py-3 rounded-xl">

                                                Continuar

                                            </button>

                                        </div>

                                    </section>

                                    <!-- PASO 4 -->
                                    <section class="min-w-full">

                                        <h2 class="text-3xl font-bold">
                                            Resumen
                                        </h2>

                                        <div class="mt-8 border rounded-2xl p-6">

                                            <h3
                                                class="text-xl font-bold"
                                                x-text="site_name">
                                            </h3>

                                            <p
                                                class="mt-2 text-gray-500"
                                                x-text="site_description">
                                            </p>

                                            <div class="mt-6 space-y-2">

                                                <p x-text="email"></p>
                                                <p x-text="phone"></p>
                                                <p x-text="whatsapp"></p>

                                            </div>

                                        </div>

                                        <div class="mt-8 flex justify-between">

                                            <button
                                                type="button"
                                                @click="step = 3">
                                                Atrás
                                            </button>

                                            <button
                                                type="submit"
                                                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">

                                                Finalizar

                                            </button>

                                        </div>

                                    </section>

                                </div>

                            </div>

                        </div>

                        <!-- PREVIEW -->
                        <div class="bg-slate-50 border-l p-10">

                            <h3 class="font-semibold text-gray-500 uppercase tracking-wider">
                                Vista previa
                            </h3>

                            <div class="mt-8 bg-white rounded-2xl shadow p-6">

                                <h2
                                    class="text-2xl font-bold"
                                    x-text="site_name || 'Mi Empresa'">
                                </h2>

                                <p
                                    class="mt-3 text-gray-500"
                                    x-text="site_description || 'Descripción de tu empresa'">
                                </p>

                                <div class="mt-8 space-y-2 text-sm">

                                    <p x-text="email || 'correo@empresa.com'"></p>
                                    <p x-text="phone || 'Teléfono'"></p>
                                    <p x-text="whatsapp || 'WhatsApp'"></p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </main>

    </div>

</div>

</body>
</html>
