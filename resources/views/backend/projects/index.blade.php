@extends('backend.layouts.mainAdmin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Proyectos</h1>
        <a href="{{ route('projects.create') }}" class="uk-button uk-button-link"
            style="color: #f4d03f; font-weight: bold; border: solid 1px; padding: 10px;">
            + Agregar Proyecto
        </a>
    </div>
    <br>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="uk-table-responsive uk-overflow-auto">
        <table class="uk-table uk-table-divider">
            <thead>
                <tr class="uk-text-left">
                    <th>#</th>
                    <th>Título</th>
                    <th>Portada</th>
                    <th>Ubicación</th>
                    <th>Responsable</th>
                    <th>Tipo</th>
                    <th>Fecha de Entrega</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $project->title }}</td>
                        <td>
                            <img src="{{ asset('storage/'. $project->cover_image) }}" 
                                alt="{{ $project->title }}" width="200" height="200">
                        </td>
                        <td>{{ $project->location }}</td>
                        <td>{{ $project->manager }}</td>
                        <td>{{ $project->type }}</td>
                        <td>{{ $project->delivery_date }}</td>

                        <td>
                            <a href="#" uk-icon="icon: pencil" title="Editar"></a>
                            <form action="#" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Eliminar" uk-icon="icon: trash" onclick="return confirm('¿Estás seguro de que deseas eliminar este proyecto?')"></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No hay proyectos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection