@extends('layouts.plantilla')
@section('content')
    <h1 class="titulo-secundario">Modificación de Alumnos</h1>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')  
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $alumno->nombre }}" required class="form-input"><br><br>

        <label for="grupo">Grupo:</label>
        <input type="text" id="grupo" name="grupo" value="{{ $alumno->grupo }}" required class="form-input"><br><br>

        <button type="submit" class="button">Guardar Alumno</button>
    </form>
@endsection