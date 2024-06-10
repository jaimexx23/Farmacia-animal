@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Proveedor</h1>
    <ul>
        <li><strong>ID:</strong> {{ $proveedor->id }}</li>
        <li><strong>Nombre:</strong> {{ $proveedor->nombre }}</li>
        <li><strong>Apellido Paterno:</strong> {{ $proveedor->Apellidopaterno }}</li>
        <li><strong>Apellido Materno:</strong> {{ $proveedor->ApellidoMaterno }}</li>
        <li><strong>Edad:</strong> {{ $proveedor->Edad }}</li>
        <li><strong>Correo:</strong> {{ $proveedor->Correo }}</li>
        <!-- Agrega más detalles según sea necesario -->
    </ul>
    <form action="{{ route('admin.proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este proveedor?')">Eliminar</button>
    </form>
</div>
@endsection
