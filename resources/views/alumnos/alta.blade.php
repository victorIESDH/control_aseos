@extends('layouts.plantilla')
@section('content')
    <h1>Alta de Alumnos</h1>
    <form class="form" action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-input" required><br><br>

        <label for="grupo" class="form-label">Grupo:</label>
        <input type="text" id="grupo" name="grupo" class="form-input" required><br><br>

        <button type="submit" class="button-secondary">Guardar Alumno</button>
    </form>
    <div class="mt-4 mb-4">
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>  
@endsection