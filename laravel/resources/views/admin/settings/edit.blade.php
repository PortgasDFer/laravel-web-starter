@extends('admin.layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-5">
    Configuración del sitio
</h1>

<form method="POST" action="{{ route('admin.settings.update') }}">
    @csrf
    @method('PUT')

    <div>
        <label>Nombre del sitio</label>
        <input
            type="text"
            name="site_name"
            value="{{ old('site_name', $setting->site_name) }}"
            class="border p-2 w-full">
    </div>

    <button class="mt-4 bg-blue-500 text-white px-4 py-2">
        Guardar
    </button>

</form>

@endsection