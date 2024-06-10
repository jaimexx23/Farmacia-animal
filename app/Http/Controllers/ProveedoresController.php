<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proovedores; // Importamos el modelo Proovedores

class ProveedoresController extends Controller
{
    public function index()
    {
        $proveedores = Proovedores::all();
        return view('admin.proovedores.index', compact('proveedores'));
    }

    public function crear()
    {
        return view('admin.proovedores.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'Apellidopaterno' => 'required|string|max:255',
            'ApellidoMaterno' => 'required|string|max:255',
            'Edad' => 'required|string|max:255',
            'Correo' => 'required|string|max:255',
        ]);

        Proovedores::create($request->all());

        return redirect()->route('admin.proveedores.index')->with('message', 'Proveedor creado satisfactoriamente!');
    }

    public function actualizar($id)
    {
        $proveedor = Proovedores::findOrFail($id);
        return view('admin.proovedores.actualizar', compact('proveedor'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'Apellidopaterno' => 'required|string|max:255',
            'ApellidoMaterno' => 'required|string|max:255',
            'Edad' => 'required|string|max:255',
            'Correo' => 'required|string|max:255',
        ]);

        $proveedor = Proovedores::findOrFail($id);
        $proveedor->update($request->all());

        return redirect()->route('admin.proveedores.index')->with('message', 'Proveedor actualizado satisfactoriamente!');
    }

    public function destroy($id)
    {
        $proveedor = Proovedores::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('admin.proveedores.index')->with('message', 'Proveedor eliminado correctamente');
    }
}
