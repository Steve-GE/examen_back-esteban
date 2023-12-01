 
 @extends('layouts.app')

@section('content')

    <h2>Editar Empleado</h2>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $empleado->apellido }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $empleado->telefono }}" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $empleado->correo }}" required>
        </div>
        <div class="mb-3">
            <label for="salario" class="form-label">Salario</label>
            <input type="number" class="form-control" id="salario" name="salario" value="{{ $empleado->salario }}" required>
        </div>
        <div class="mb-3">
            <label for="puesto" class="form-label">Puesto</label>
            <input type="text" class="form-control" id="puesto" name="puesto" value="{{ $empleado->puesto }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>
    </form> 
    @endsection
