<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario alumnos</title>
</head>
<body>
    <h1>Alta de Alumnos</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="grupo">Grupo:</label>
        <input type="text" id="grupo" name="grupo" required><br><br>

        <button type="submit">Guardar Alumno</button>
    </form>
</body>
</html>