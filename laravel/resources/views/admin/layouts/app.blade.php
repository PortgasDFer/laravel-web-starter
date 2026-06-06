<!DOCTYPE html>
<html>
<head>
    <title>Administración</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-5">

    <nav class="mb-6">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
        <a href="{{ route('admin.settings.edit') }}">Configuración</a> |
        <form class="inline" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Salir</button>
        </form>
    </nav>

    @yield('content')

</div>

</body>
</html>