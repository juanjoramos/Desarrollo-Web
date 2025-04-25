<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Proyectos</title>
</head>
<body>
    <h1>Proyectos PA/PIA</h1>

    <a href="{{ route('proyectos.create') }}">Crear Nuevo Proyecto</a>

    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($proyectos as $proyecto)
            <li>
                {{ $proyecto->nombre }} ({{ $proyecto->tipo }})
                <a href="{{ route('proyectos.show', $proyecto) }}">Ver</a>
                <a href="{{ route('proyectos.edit', $proyecto) }}">Editar</a>
                <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>