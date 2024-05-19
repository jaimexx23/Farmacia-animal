<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $Clientes = Cliente::all();
        return view('Clientes.index', compact('Clientes'));

        //alternativas a compact
        //return view('students.index')->with('students', $students);
        //return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('Clientes.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'age' => 'required|integer|min:1',
        ]);

         // Crear un nuevo estudiante usando el método `create` del modelo
        Cliente::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('Clientes.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $Cliente = Cliente::findOrFail($id);
        return view('Clientes.edit', compact('Cliente'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'age' => 'required|integer|min:1',
        ]);

        // Buscar el estudiante por su ID
        $Cliente = Cliente::findOrFail($id);

        // Actualizar los datos del estudiante
        $Cliente->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('Clientes.index');
    }

    public function destroy(string $id)
    {
        $Cliente = Cliente::findOrFail($id);

        $Cliente->delete();

        return redirect()->route('Clientes.index');
    }
}