<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        return view('carreras.index', compact('carreras'));
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Carrera::create($request->all());

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera creada exitosamente.');
    }

    public function show(string $id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.show', compact('carrera'));
    }

    public function edit(string $id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.edit', compact('carrera'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $carrera = Carrera::findOrFail($id);
        $carrera->update($request->all());

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera actualizada exitosamente.');
    }

    public function destroy(string $id)
    {
        $carrera = Carrera::findOrFail($id);
        $carrera->delete();

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera eliminada exitosamente.');
    }
}