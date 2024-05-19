<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        Marca::create($request->all());

        return redirect()->route('marcas.index');
    }

    public function show(string $id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.show', compact('marca'));
    }

    public function edit(string $id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        $marca = Marca::findOrFail($id);

        $marca->update($request->all());

        return redirect()->route('marcas.index');
    }

    public function destroy(string $id)
    {
        $marca = Marca::findOrFail($id);

        $marca->delete();

        return redirect()->route('marcas.index');
    }
}
