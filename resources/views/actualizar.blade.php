@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Actualizar Producto</h1>

    <form action="{{ route('admin.productos.actualizar', $producto->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">

            <label for="nombre">Nombre</label>

            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>

        </div>

        <div class="form-group">

            <label for="precio">Precio</label>

            <input type="text" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>

        </div>

        <div class="form-group">

            <label for="stock">Stock</label>

            <input type="text" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}" required>

        </div>

        <div class="form-group">

            <label for="img">Imagen</label>
            <br>
            <img src="{{ asset('storage/' . $producto->img) }}" alt="{{ $producto->nombre }}" style="max-width: 200px; max-height: 200px;">
            <br><br>
            <input type="file" class="form-control" id="img" name="img">

        </div>

        <button type="submit" class="btn btn-primary">Actualizar Producto</button>

    </form>

</div>

@endsection
