@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Proveedor</h1>
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <form action="{{ route('admin.proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $proveedor->nombre) }}" required>
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Apellidopaterno">Apellido Paterno</label>
            <input type="text" name="Apellidopaterno" id="Apellidopaterno" class="form-control @error('Apellidopaterno') is-invalid @enderror" value="{{ old('Apellidopaterno', $proveedor->Apellidopaterno) }}" required>
            @error('Apellidopaterno')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="ApellidoMaterno">Apellido Materno</label>
            <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" value="{{ old('ApellidoMaterno', $proveedor->ApellidoMaterno) }}" required>
            @error('ApellidoMaterno')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Edad">Edad</label>
            <input type="number" name="Edad" id="Edad" class="form-control @error('Edad') is-invalid @enderror" value="{{ old('Edad', $proveedor->Edad) }}" required>
            @error('Edad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Correo">Correo Electrónico</label>
            <input type="email" name="Correo" id="Correo" class="form-control @error('Correo') is-invalid @enderror" value="{{ old('Correo', $proveedor->Correo) }}" required>
            @error('Correo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
