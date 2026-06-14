@extends('layouts.minia')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Nueva Página</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Páginas</a></li>
                    <li class="breadcrumb-item active">Nueva Página</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
    <a href="{{ route('pages.index') }}" class="btn btn-success waves-effect waves-light w-sm">

        <i class="mdi mdi-keyboard-return d-block font-size-16"></i>

        Regresar al listado

    </a>



<div class="row justify-content-center">

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">
                    Nueva Página
                </h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pages.store') }}">

                    @csrf

                    <div class="mb-3">

                        <label for="title" class="form-label">
                            Título
                        </label>

                        <input
                            class="form-control @error('title') is-invalid @enderror"
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Ej. Nosotros">

                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-3">

                        <label for="slug" class="form-label">
                            Slug
                        </label>

                        <input
                            class="form-control @error('slug') is-invalid @enderror"
                            type="text"
                            id="slug"
                            name="slug"
                            value="{{ old('slug') }}"
                            placeholder="ej. nosotros">

                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <small class="text-muted">
                            URL resultante: /nosotros
                        </small>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Estado
                        </label>

                        <select name="status" class="form-select">

                            <option value="draft">
                                Borrador
                            </option>

                            <option value="published">
                                Publicada
                            </option>

                        </select>

                    </div>

                    <div class="mb-3">

                        <label for="content" class="form-label">
                            Contenido
                        </label>

                        <textarea
                            id="content"
                            name="content"
                            rows="10"
                            class="form-control @error('content') is-invalid @enderror"
                            placeholder="Escribe aquí el contenido de la página...">{{ old('content') }}</textarea>

                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <hr>

                    <h5 class="mb-3">
                        SEO
                    </h5>

                    <div class="mb-3">

                        <label for="meta_title" class="form-label">
                            Meta Title
                        </label>

                        <input
                            class="form-control @error('meta_title') is-invalid @enderror"
                            type="text"
                            id="meta_title"
                            name="meta_title"
                            value="{{ old('meta_title') }}"
                            placeholder="Título para Google">

                        @error('meta_title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-3">

                        <label for="meta_description" class="form-label">
                            Meta Description
                        </label>

                        <textarea
                            id="meta_description"
                            name="meta_description"
                            rows="3"
                            class="form-control @error('meta_description') is-invalid @enderror"
                            placeholder="Descripción para motores de búsqueda">{{ old('meta_description') }}</textarea>

                        @error('meta_description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="d-flex justify-content-end gap-2">

                        <a
                            href="{{ route('pages.index') }}"
                            class="btn btn-light">

                            Cancelar

                        </a>

                        <button
                            type="submit"
                            class="btn btn-success">

                            Guardar Página

                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div><!-- end col -->


</div>

@endsection


@push('scripts')

<script>

document.getElementById('title').addEventListener('input', function () {

    const slugField = document.getElementById('slug');

    if (slugField.dataset.manual === 'true') {
        return;
    }

    let slug = this.value
        .toLowerCase()
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "")
        .replace(/[^a-z0-9\s-]/g, "")
        .trim()
        .replace(/\s+/g, '-');

    slugField.value = slug;

});

document.getElementById('slug').addEventListener('input', function () {

    this.dataset.manual = 'true';

});

</script>

@endpush
