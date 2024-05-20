<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcas;
use Session;
use Redirect;

class MarcasController extends Controller
{
    // Mostrar la lista de marcas
    public function index()
    {
        $marcas = Marcas::all();
        return view('admin.marcas.admin.index', compact('marcas'));
    }

    // Mostrar el formulario de creación de marcas
    public function crear()
    {
        return view('admin.marcas.admin.crear');
    }

    // Almacenar una nueva marca
    public function store(Request $request)
    {
        $this->validate($request, [
            'Descripcion' => 'required|string|max:255',
            'PaisOrigen' => 'required|string|max:255',
        ]);

        $marcas = new Marcas;
        $marcas->Descripcion = $request->Descripcion;
        $marcas->PaisOrigen = $request->PaisOrigen;
        $marcas->save();

        return redirect()->route('marcas.index')->with('message', 'Guardado Satisfactoriamente!');
    }

    // Mostrar los detalles de una marca
    public function show($id)
    {
        $marca = Marcas::find($id);

        if (!$marca) {
            return redirect()->route('marcas.index')->with('error', 'Marca no encontrada.');
        }

        return view('admin.marcas.admin.detalles', compact('marca'));
    }

    // Mostrar el formulario de edición de una marca
    public function actualizar($id)
    {
        $marca = Marcas::find($id);

        if (!$marca) {
            return redirect()->route('marcas.index')->with('error', 'Marca no encontrada.');
        }

        return view('admin.marcas.admin.actualizar', compact('marca'));
    }
}
