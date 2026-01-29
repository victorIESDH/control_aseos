@extends('layouts.plantilla')
@section('content')
    <h1>Alta de Alumnos</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="grupo">Grupo:</label>
        <input type="text" id="grupo" name="grupo" required><br><br>

        <button type="submit">Guardar Alumno</button>
    </form>
@endsection