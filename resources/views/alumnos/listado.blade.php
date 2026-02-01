@extends('layouts.plantilla')
@section('content')
<h1 class="titulo">Gestión de Alumnos</h1>
    <a href="{{ route('alumnos.create') }}" class="button">Agregar Nuevo Alumno</a>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->grupo }}</td>
                <td>
                    <a href="{{ route('alumnos.edit', $alumno->id) }}" class="button-secondary">Editar</a>
                    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $alumnos->links() }}
@endsection