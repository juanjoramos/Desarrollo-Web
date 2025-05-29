<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Proyecto Asignatura</h2>
        <a href="{{ route('proyecto_asignaturas.index') }}" 
           class="inline-block bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 mb-4">
            ← Volver al listado
        </a>
    </x-slot>

    <div class="py-12 px-6">
        <form action="{{ route('proyecto_asignaturas.update', $proyectoAsignatura->id) }}" method="POST"
              class="bg-white p-6 rounded shadow-md max-w-xl">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="proyecto_id" class="block font-bold">Proyecto:</label>
                <select name="proyecto_id" id="proyecto_id" class="w-full border p-2 rounded" required>
                    <option value="">-- Seleccionar Proyecto --</option>
                    @foreach ($proyectos as $proyecto)
                        <option value="{{ $proyecto->id }}"
                            {{ (old('proyecto_id') ?? $proyectoAsignatura->proyecto_id) == $proyecto->id ? 'selected' : '' }}>
                            {{ $proyecto->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="asignatura_id" class="block font-bold">Asignatura:</label>
                <select name="asignatura_id" id="asignatura_id" class="w-full border p-2 rounded" required>
                    <option value="">-- Seleccionar Asignatura --</option>
                    @foreach ($asignaturas as $asignatura)
                        <option value="{{ $asignatura->id }}"
                            {{ (old('asignatura_id') ?? $proyectoAsignatura->asignatura_id) == $asignatura->id ? 'selected' : '' }}>
                            {{ $asignatura->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="docente_id" class="block font-bold">Docente:</label>
                <select name="docente_id" id="docente_id" class="w-full border p-2 rounded" required>
                    <option value="">-- Seleccionar Docente --</option>
                    @foreach ($docentes as $docente)
                        <option value="{{ $docente->id }}"
                            {{ (old('docente_id') ?? $proyectoAsignatura->docente_id) == $docente->id ? 'selected' : '' }}>
                            {{ $docente->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="grupo" class="block font-bold">Grupo:</label>
                <input type="text" name="grupo" id="grupo" class="w-full border p-2 rounded"
                       value="{{ old('grupo') ?? $proyectoAsignatura->grupo }}" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
        </form>
    </div>
</x-app-layout>