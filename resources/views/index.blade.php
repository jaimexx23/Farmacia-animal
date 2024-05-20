@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Listado de Productos</h3>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->precio }}</td>
                                    <td>{{ $producto->stock }}</td>
                                    <td>
                                        <a href="{{ route('admin.productos.editar', $producto->id) }}" class="btn btn-warning">Editar</a>
                                        <form action="{{ route('admin.productos.eliminar', $producto->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('admin.productos.crear') }}" class="btn btn-primary">Crear Nuevo Producto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
