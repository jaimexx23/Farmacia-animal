<?php

namespace App\Http\Controllers;

use App\Models\Productos; // Importa el modelo Productos
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    public function index()
{
 
    $productos = Productos::all();
    return view('admin.productos.admin.index', compact('productos'));
}

    public function crear()
    {
        return view('admin.productos.crear');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las reglas según tus necesidades
        ]);

        // Manejar la subida de imagen
        $imagePath = $request->file('img')->store('public/images');

        // Crear el producto
        $producto = new Productos;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->img = $imagePath;
        $producto->save();

        // Redireccionar con un mensaje de éxito
        Session::flash('message', 'Producto creado satisfactoriamente!');
        return Redirect::to('admin/productos');
    }

    public function show($id)
    {
        $producto = Productos::find($id);
        return view('admin.productos.show', compact('producto'));
    }

    public function editar($id)
    {
        $producto = Productos::find($id);
        return view('admin.productos.editar', compact('producto'));
    }

    public function actualizar(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        // Encontrar el producto por su ID
        $producto = Productos::find($id);

        // Actualizar los datos del producto
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->save();

        // Redireccionar con un mensaje de éxito
        Session::flash('message', 'Producto actualizado satisfactoriamente!');
        return Redirect::to('admin/productos');
    }

    public function eliminar($id)
    {
        // Encontrar el producto por su ID y eliminarlo
        Productos::destroy($id);

        // Redireccionar con un mensaje de éxito
        Session::flash('message', 'Producto eliminado satisfactoriamente!');
        return Redirect::to('admin/productos');
    }
}
