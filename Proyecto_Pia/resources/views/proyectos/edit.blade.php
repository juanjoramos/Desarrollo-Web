<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Proyecto</h2>
    </x-slot>

    <div class="py-12 px-6">
        <form action="{{ route('proyectos.update', $proyecto) }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-xl">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-bold">Título</label>
                <input type="text" name="titulo" value="{{ old('titulo', $proyecto->titulo) }}" class="w-full border p-2 rounded" required>
                @error('titulo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-bold">Resumen</label>
                <textarea name="resumen" class="w-full border p-2 rounded" rows="3">{{ old('resumen', $proyecto->resumen) }}</textarea>
                @error('resumen')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-bold">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', $proyecto->fecha_inicio ? $proyecto->fecha_inicio->format('Y-m-d') : '') }}" class="w-full border p-2 rounded" required>
                @error('fecha_inicio')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-bold">Fecha Fin</label>
                <input type="date" name="fecha_fin" value="{{ old('fecha_fin', $proyecto->fecha_fin ? $proyecto->fecha_fin->format('Y-m-d') : '') }}" class="w-full border p-2 rounded">
                @error('fecha_fin')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-bold">Estado</label>
                <input type="text" name="estado" value="{{ old('estado', $proyecto->estado) }}" class="w-full border p-2 rounded" required>
                @error('estado')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-bold">Tipo de Proyecto</label>
                <select name="id_tipo_proyecto" class="w-full border p-2 rounded" required>
                    <option value="">-- Seleccione --</option>
                    @foreach ($tiposProyecto as $tipo)
                        <option value="{{ $tipo->id }}" {{ old('id_tipo_proyecto', $proyecto->id_tipo_proyecto) == $tipo->id ? 'selected' : '' }}>
                            {{ $tipo->descripcion }}
                        </option>
                    @endforeach
                </select>
                @error('id_tipo_proyecto')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Actualizar</button>
            <a href="{{ route('proyectos.index') }}" class="ml-4 text-gray-700">Cancelar</a>
        </form>
    </div>
</x-app-layout>
