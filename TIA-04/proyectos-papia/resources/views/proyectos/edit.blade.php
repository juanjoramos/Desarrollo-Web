<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
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

        label {
            display: block;
            margin-bottom: 5px;
            color: #2c3e50;
            font-weight: 600;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Editar Proyecto</h1>
        <form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $proyecto->nombre }}" required>

            <label for="tipo">Tipo:</label>
            <select name="tipo" required>
                <option value="PA" {{ $proyecto->tipo == 'PA' ? 'selected' : '' }}>PA</option>
                <option value="PIA" {{ $proyecto->tipo == 'PIA' ? 'selected' : '' }}>PIA</option>
            </select>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required>{{ $proyecto->descripcion }}</textarea>

            <label for="metodologia">Metodología:</label>
            <input type="text" name="metodologia" value="{{ $proyecto->metodologia }}" required>

            <label for="docente">Docente:</label>
            <input type="text" name="docente" value="{{ $proyecto->docente }}" required>

            <button type="submit">Actualizar</button>
        </form>
        <a href="{{ route('proyectos.index') }}">Cancelar</a>
    </div>
</body>
</html>
