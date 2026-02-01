@extends('layouts.plantilla')
@section('content')
<h1 class="titulo">Listado de Aseos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aseos as $aseo)
            <tr>
                <td>{{ $aseo->id }}</td>
                <td>{{ $aseo->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $aseos->links() }}
@endsection