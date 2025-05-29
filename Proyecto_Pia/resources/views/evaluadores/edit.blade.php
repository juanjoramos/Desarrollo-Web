<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Evaluador</h2>
    </x-slot>

    <div class="py-12 px-6">
        <form action="{{ route('evaluadores.update', $evaluador) }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-xl">
            @csrf @method('PUT')

            <div class="mb-4">
                <label class="block font-bold">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre', $evaluador->nombre) }}" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Correo</label>
                <input type="email" name="correo" value="{{ old('correo', $evaluador->correo) }}" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Especialidad</label>
                <input type="text" name="especialidad" value="{{ old('especialidad', $evaluador->especialidad) }}" class="w-full border p-2 rounded">
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Actualizar</button>
            <a href="{{ route('evaluadores.index') }}" class="ml-4 text-gray-700">Cancelar</a>
        </form>
    </div>
</x-app-layout>