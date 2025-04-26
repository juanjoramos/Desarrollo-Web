<!DOCTYPE html>
<html>
<head>
    <title>Listado de Tipos de Proyecto</title>
</head>
<body>
    <h1>Tipos de Proyecto</h1>
    <ul>
        @foreach ($tipos as $tipo)
            <li>{{ $tipo->nombre }}</li>
        @endforeach
    </ul>
</body>
</html>