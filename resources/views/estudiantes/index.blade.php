@extends('layouts.app')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h2 class="text-3xl font-bold text-gray-800">Lista de Estudiantes</h2>
    <a href="{{ route('estudiantes.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
        + Nuevo Estudiante
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Carrera</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Semestre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($estudiantes as $estudiante)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $estudiante->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $estudiante->nombre }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $estudiante->correo }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $estudiante->carrera->nombre }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $estudiante->semestre }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                    <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                    <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de eliminar este estudiante?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@if($estudiantes->isEmpty())
<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded mt-4">
    No hay estudiantes registrados aún.
</div>
@endif
@endsection