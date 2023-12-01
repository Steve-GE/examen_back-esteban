<!-- resources/views/empleados/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Lista de Empleados</h2>
    <a href="{{ route('empleados.create') }}" class="btn btn-success">Agregar Empleado</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Salario</th>
                <th>Puesto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>{{ $empleado->puesto }}</td>
                    <td>
                        <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div>
    <h3>Empleados en formato JSON</h3>
    <pre>{{ json_encode($empleados, JSON_PRETTY_PRINT) }}</pre>
    </div>
     
@endsection