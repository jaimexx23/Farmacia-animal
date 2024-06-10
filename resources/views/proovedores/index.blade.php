@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Proveedores</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <a href="{{ route('admin.proveedores.crear') }}" class="btn btn-primary mb-3">Agregar Nuevo Proveedor</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Acciones</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->Apellidopaterno }}</td>
                    <td>{{ $proveedor->ApellidoMaterno }}</td>
                    <td>{{ $proveedor->Edad }}</td>
                    <td>{{ $proveedor->Correo }}</td>

                    <td>
                        <a href="{{ route('admin.proveedores.actualizar', $proveedor->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('admin.proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este proveedor?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
