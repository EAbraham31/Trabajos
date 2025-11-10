@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Carrera</h2>
    
    <form action="{{ route('carreras.update', $carrera->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre de la Carrera</label>
            <input type="text" name="nombre" id="nombre" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                   value="{{ old('nombre', $carrera->nombre) }}"
                   required>
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                Actualizar Carrera
            </button>
            <a href="{{ route('carreras.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection