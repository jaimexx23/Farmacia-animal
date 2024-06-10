@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Proveedor</h1>
    <form action="{{ route('admin.proveedores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="Apellidopaterno">Apellido Paterno:</label>
            <input type="text" class="form-control" id="Apellidopaterno" name="Apellidopaterno" required>
        </div>
        <div class="form-group">
            <label for="ApellidoMaterno">Apellido Materno:</label>
            <input type="text" class="form-control" id="ApellidoMaterno" name="ApellidoMaterno" required>
        </div>
        <div class="form-group">
            <label for="Edad">Edad:</label>
            <input type="text" class="form-control" id="Edad" name="Edad" required>
        </div>
        <div class="form-group">
            <label for="Correo">Correo:</label>
            <input type="email" class="form-control" id="Correo" name="Correo" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
