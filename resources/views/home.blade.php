<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Agregar estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            font-family: Arial, sans-serif; /* Fuente del texto */
        }
        .container {
            margin-top: 50px; /* Espacio superior */
        }
        h1 {
            color: #007bff; /* Color del título */
        }
        .btn {
            margin-right: 10px; /* Margen entre botones */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Dashboard</h1>
                <p class="lead">¡Estás conectado!</p>
                <!-- Botones para navegar a otras páginas -->
                <div class="btn-group" role="group" aria-label="Botones de navegación">
                    <a href="{{ url('admin/clientes') }}" class="btn btn-primary">Clientes</a>
                    <a href="{{ url('admin/productos') }}" class="btn btn-primary">Productos</a>
                    <a href="{{ url('admin/marcas') }}" class="btn btn-primary">Marcas</a>
                    <a href="{{ url('admin/cargos') }}" class="btn btn-primary">Cargos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar Bootstrap JS y dependencias de jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

