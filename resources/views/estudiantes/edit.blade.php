@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Estudiante</h2>
    
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre Completo</label>
                <input type="text" name="nombre" id="nombre" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('nombre', $estudiante->nombre) }}"
                       required>
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Correo -->
            <div class="mb-4">
                <label for="correo" class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                <input type="email" name="correo" id="correo" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('correo', $estudiante->correo) }}"
                       required>
                @error('correo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Carrera -->
            <div class="mb-4">
                <label for="carrera_id" class="block text-sm font-medium text-gray-700 mb-2">Carrera</label>
                <select name="carrera_id" id="carrera_id" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <option value="">Selecciona una carrera</option>
                    @foreach($carreras as $carrera)
                        <option value="{{ $carrera->id }}" {{ (old('carrera_id', $estudiante->carrera_id) == $carrera->id) ? 'selected' : '' }}>
                            {{ $carrera->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('carrera_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Semestre -->
            <div class="mb-4">
                <label for="semestre" class="block text-sm font-medium text-gray-700 mb-2">Semestre</label>
                <select name="semestre" id="semestre" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <option value="">Selecciona semestre</option>
                    @for($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}" {{ (old('semestre', $estudiante->semestre) == $i) ? 'selected' : '' }}>
                            Semestre {{ $i }}
                        </option>
                    @endfor
                </select>
                @error('semestre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div class="flex space-x-4 mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                Actualizar Estudiante
            </button>
            <a href="{{ route('estudiantes.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection