<!-- resources/views/proyectos/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Proyecto</title>
</head>
<body>
    <h1>Detalles del Proyecto</h1>
    <p><strong>Nombre:</strong> {{ $proyecto->nombre }}</p>
    <p><strong>Tipo:</strong> {{ $proyecto->tipo }}</p>
    <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
    <p><strong>Metodología:</strong> {{ $proyecto->metodologia }}</p>
    <p><strong>Docente:</strong> {{ $proyecto->docente }}</p>
    <a href="{{ route('proyectos.index') }}">Volver al listado</a>
</body>
</html>