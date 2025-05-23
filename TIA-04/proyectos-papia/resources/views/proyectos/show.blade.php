<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Proyecto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .contenedor {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        p {
            font-size: 16px;
            color: #2c3e50;
            margin-bottom: 12px;
        }

        strong {
            font-weight: 600;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Detalles del Proyecto</h1>
        <p><strong>Nombre:</strong> {{ $proyecto->nombre }}</p>
        <p><strong>Tipo:</strong> {{ $proyecto->tipo }}</p>
        <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
        <p><strong>Metodología:</strong> {{ $proyecto->metodologia }}</p>
        <p><strong>Docente:</strong> {{ $proyecto->docente }}</p>
        <a href="{{ route('proyectos.index') }}">Volver al listado</a>
    </div>
</body>
</html>
