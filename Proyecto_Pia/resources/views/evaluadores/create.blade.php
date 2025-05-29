<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nuevo Evaluador</h2>
    </x-slot>

    <div class="py-12 px-6">
        <form action="{{ route('evaluadores.store') }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-xl">
            @csrf

            <div class="mb-4">
                <label class="block font-bold">Nombre</label>
                <input type="text" name="nombre" class="w-full border p-2 rounded" required value="{{ old('nombre') }}">
            </div>

            <div class="mb-4">
                <label class="block font-bold">Correo</label>
                <input type="email" name="correo" class="w-full border p-2 rounded" required value="{{ old('correo') }}">
            </div>

            <div class="mb-4">
                <label class="block font-bold">Especialidad</label>
                <input type="text" name="especialidad" class="w-full border p-2 rounded" value="{{ old('especialidad') }}">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Guardar</button>
            <a href="{{ route('evaluadores.index') }}" class="ml-4 text-gray-700">Cancelar</a>
        </form>
    </div>
</x-app-layout>