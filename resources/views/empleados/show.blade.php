@extends('layouts.app')

@section('content')
    <h2>Detalles del Empleado</h2>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <td>{{ $empleado->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $empleado->nombre }}</td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td>{{ $empleado->apellido }}</td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td>{{ $empleado->telefono }}</td>
        </tr>
        <tr>
            <th>Correo</th>
            <td>{{ $empleado->correo }}</td>
        </tr>
        <tr>
            <th>Salario</th>
            <td>{{ $empleado->salario }}</td>
        </tr>
        <tr>
            <th>Puesto</th>
            <td>{{ $empleado->puesto }}</td>
        </tr>
    </table>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>

    <br>
    <div style="margin-top:40px">
    <pre>{{ json_encode($empleado, JSON_PRETTY_PRINT) }}</pre>
    </div>
    @endsection