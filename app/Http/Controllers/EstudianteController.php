<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Carrera;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::with('carrera')->get();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        $carreras = Carrera::all();
        return view('estudiantes.create', compact('carreras'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:estudiantes,correo',
            'carrera_id' => 'required|exists:carreras,id',
            'semestre' => 'required|integer|min:1|max:10'
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante creado exitosamente.');
    }

    public function show(string $id)
    {
        $estudiante = Estudiante::with('carrera')->findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $carreras = Carrera::all();
        return view('estudiantes.edit', compact('estudiante', 'carreras'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:estudiantes,correo,' . $id,
            'carrera_id' => 'required|exists:carreras,id',
            'semestre' => 'required|integer|min:1|max:10'
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante actualizado exitosamente.');
    }

    public function destroy(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante eliminado exitosamente.');
    }
}