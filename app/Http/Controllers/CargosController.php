<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo; // Cambio de Cargos a Cargo

class CargosController extends Controller
{
    // Listar todos los cargos en la vista principal
    public function index()
    {
        $cargos = Cargo::all(); // Cambio de Cargos a Cargo
        return view('admin.Cargos.index', compact('cargos'));
    }

    // Método para mostrar el formulario de creación de cargos
    public function crear()
    {
        return view('admin.Cargos.crear');
    }

    // Método para almacenar un nuevo cargo en la base de datos
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $this->validate($request, [
            'descripcion' => 'required|string|max:255',
        ]);

        // Instancia del modelo Cargo que representa la tabla '_cargos'
        $cargo = new Cargo;

        // Asignación de los datos del formulario al modelo
        $cargo->descripcion = $request->descripcion;

        // Guardado del registro en la base de datos
        $cargo->save();

        // Redirección a la vista principal con un mensaje de éxito
        return redirect()->route('admin.cargos.index')->with('message', 'Guardado Satisfactoriamente !');
    }

    // Otros métodos del controlador se mantienen sin cambios
    public function eliminar($id)
{
    // Encontrar el cargo por su ID
    $cargo = Cargo::find($id);

    // Verificar si el cargo existe
    if (!$cargo) {
        // Si no se encuentra el cargo, redireccionar con un mensaje de error
        return redirect()->route('admin.cargos.index')->with('error', 'El cargo no existe.');
    }

    // Eliminar el registro de la base de datos
    $cargo->delete();

    // Redireccionar con un mensaje de éxito
    return redirect()->route('admin.cargos.index')->with('message', 'Cargo eliminado satisfactoriamente.');
}

}
