@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">Sistema de Gestión de Estudiantes</h1>
    <p class="text-lg text-gray-600 mb-12">Bienvenido al CRUD completo desarrollado con Laravel y Tailwind CSS</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Tarjeta Carreras -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
            <div class="flex items-center mb-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 ml-4">Carreras</h2>
            </div>
            <p class="text-gray-600 mb-4">Gestiona las carreras disponibles para los estudiantes</p>
            <a href="{{ route('carreras.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg inline-block">
                Gestionar Carreras
            </a>
        </div>

        <!-- Tarjeta Estudiantes -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
            <div class="flex items-center mb-4">
                <div class="bg-green-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 ml-4">Estudiantes</h2>
            </div>
            <p class="text-gray-600 mb-4">Administra el registro completo de estudiantes</p>
            <a href="{{ route('estudiantes.index') }}" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg inline-block">
                Gestionar Estudiantes
            </a>
        </div>
    </div>

    <!-- Información del Sistema -->
    <div class="mt-12 bg-gray-50 rounded-lg p-6 max-w-2xl mx-auto">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Funcionalidades del Sistema</h3>
        <ul class="text-left text-gray-600 space-y-2">
            <li>✅ <strong>CRUD Completo:</strong> Crear, Leer, Actualizar, Eliminar</li>
            <li>✅ <strong>Validaciones:</strong> Formularios con validación integrada</li>
            <li>✅ <strong>Relaciones:</strong> Estudiantes pertenecen a Carreras</li>
            <li>✅ <strong>Diseño Responsive:</strong> Tailwind CSS para todos los dispositivos</li>
            <li>✅ <strong>Mensajes Flash:</strong> Notificaciones de éxito y error</li>
        </ul>
    </div>
</div>
@endsection