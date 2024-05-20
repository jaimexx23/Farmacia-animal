<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_area' => 'required|string|min:3|max:255',
        ]);

        Area::create($request->all());

        return redirect()->route('areas.index');
    }

    public function show(string $id_area)
    {
        $area = Area::findOrFail($id_area);
        return view('areas.show', compact('area'));
    }

    public function edit(string $id_area)
    {
        $area = Area::findOrFail($id_area);
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, string $id_area)
    {

        $request->validate([
            'nom_area' => 'required|string|min:3|max:255',
        ]);

        $area = Area::findOrFail($id_area);

        $area->update($request->all());

        return redirect()->route('areas.index');
    }

    public function destroy(string $id_area)
    {
        $area = Area::findOrFail($id_area);

        $area->delete();

        return redirect()->route('areas.index');
    }
}
