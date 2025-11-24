@extends('Layouts.main')
@section('content')
<h1>Tareas</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Completado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $tarea)
        <tr>
            <td>{{ $tarea->nombre }}</td>
            <td>{{ $tarea->descripcion }}</td>
            <td>{{ $tarea->estado }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection