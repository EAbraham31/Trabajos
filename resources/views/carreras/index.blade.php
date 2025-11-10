@extends('layouts.app')

@section('content')
<div class="mb-6">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Lista de Carreras</h2>
    <a href="{{ route('carreras.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
        + Nueva Carrera
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($carreras as $carrera)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $carrera->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $carrera->nombre }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                    <a href="{{ route('carreras.edit', $carrera->id) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                    <form action="{{ route('carreras.destroy', $carrera->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@if($carreras->isEmpty())
<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded mt-4">
    No hay carreras registradas aún.
</div>
@endif
@endsection