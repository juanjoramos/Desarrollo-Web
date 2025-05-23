<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f6fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #2c3e50;
            text-align: center;
        }

        form label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #34495e;
        }

        form input[type="text"],
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        form textarea {
            resize: vertical;
            height: 80px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Crear Proyecto</h1>
        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="tipo">Tipo:</label>
            <select name="tipo" required>
                <option value="PA">PA</option>
                <option value="PIA">PIA</option>
            </select>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea>

            <label for="metodologia">Metodología:</label>
            <input type="text" name="metodologia" required>

            <label for="docente">Docente:</label>
            <input type="text" name="docente" required>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
