<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Proyecto Asignaturas</h2>
        <a href="{{ route('dashboard') }}" 
           class="inline-block bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 mb-4">
            ← Volver al Menú Principal
        </a>
    </x-slot>

    <div class="py-12 px-6">
        <div class="bg-white shadow-md rounded p-6">
            <a href="{{ route('proyecto_asignaturas.create') }}" 
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">
                + Crear Nuevo
            </a>

            <table class="w-full table-auto border-collapse border border-gray-300 mt-4">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Proyecto</th>
                        <th class="border px-4 py-2">Asignatura</th>
                        <th class="border px-4 py-2">Docente</th>
                        <th class="border px-4 py-2">Grupo</th>
                        <th class="border px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proyectoAsignaturas as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">{{ $item->id }}</td>
                            <td class="border px-4 py-2">{{ $item->proyecto->nombre ?? 'N/A' }}</td>
                            <td class="border px-4 py-2">{{ $item->asignatura->nombre ?? 'N/A' }}</td>
                            <td class="border px-4 py-2">{{ $item->docente->nombre ?? 'N/A' }}</td>
                            <td class="border px-4 py-2">{{ $item->grupo }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('proyecto_asignaturas.edit', $item->id) }}" 
                                   class="text-blue-600 hover:underline">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>