@extends('layouts.plantilla')
@section('content')
<h1 class="titulo">Solicitudes de acceso al aseo</h1>
    <a href="{{ route('solicitud.create') }}" class="button">Nueva solicitud de acceso</a>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Grupo</th>
                <th>Alumno</th>
                <th>Aseo</th>
                <th>Fecha solicitud</th>
                <th>Devuelve llave</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitudes as $solicitudes)
            <tr>
                <td>{{ $solicitud->id }}</td>
                <td>{{ $solicitud->nombre }}</td>
                <td>{{ $solicitud->grupo }}</td>
                <td>{{ $solicitud->aseo->descripcion }}</td>
                <td>{{ $solicitud->fecha_solicitud }}</td>
                <td>{{ $solicitud->devuelve_llave }}</td>
                <td>
                    <a href="{{ route('solicitudes.edit', $solicitud->id) }}" class="button-secondary">Editar</a>
                    <form action="{{ route('solicitudes.destroy', $solicitud->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $solicitudes->links() }}
@endsection