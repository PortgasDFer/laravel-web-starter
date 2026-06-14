@extends('layouts.minia')

@section('content')
    <a href="{{ route('pages.create') }}" class="btn btn-success waves-effect waves-light w-sm">

        <i class="mdi mdi-web-plus d-block font-size-16"></i>

        Nueva Página

    </a>


     <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                    <tr>
                        <th>Título</th>
                        <th>Slug</th>
                        <th>Estado</th>
                        <th width="150">Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($pages as $page)

                        <tr>

                            <td>{{ $page->title }}</td>

                            <td>
                                /{{ $page->slug }}
                            </td>

                            <td>

                                @if($page->status == 'published')

                                    <span class="badge bg-success">
                                        Publicada
                                    </span>

                                @else

                                    <span class="badge bg-warning">
                                        Borrador
                                    </span>

                                @endif

                            </td>

                            <td>

                                <a
                                    href="{{ route('pages.edit', $page) }}"
                                    class="btn btn-sm btn-primary">

                                    Editar

                                </a>

                                <form
                                    action="{{ route('pages.destroy', $page) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Eliminar esta página?')">

                                        Eliminar

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4" class="text-center">

                                No hay páginas registradas.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection
