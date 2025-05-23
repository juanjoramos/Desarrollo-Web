<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Tipos de Proyecto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f6fa;
            margin: 0;
            padding: 40px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        .link-crear {
            display: inline-block;
            margin: 20px auto;
            text-align: center;
            color: #3498db;
            font-weight: 600;
            text-decoration: none;
        }

        .link-crear:hover {
            text-decoration: underline;
        }

        .mensaje {
            color: green;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .tipos-lista {
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            list-style: none;
        }

        .tipos-lista li {
            background-color: #ffffff;
            padding: 16px 20px;
            margin-bottom: 12px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .tipo-nombre {
            flex: 1;
            font-size: 16px;
            color: #2c3e50;
        }

        .acciones a,
        .acciones button {
            margin-left: 10px;
            font-size: 14px;
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .acciones a {
            color: white;
            background-color: #3498db;
        }

        .acciones a:hover {
            background-color: #2980b9;
        }

        .acciones button {
            background-color: #e74c3c;
            color: white;
        }

        .acciones button:hover {
            background-color: #c0392b;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Tipos de Proyecto</h1>

    <div style="text-align: center;">
        <a class="link-crear" href="{{ route('tipoproyecto.create') }}">Crear Nuevo Tipo</a>
    </div>

    @if (session('success'))
        <p class="mensaje">{{ session('success') }}</p>
    @endif

    <ul class="tipos-lista">
        @foreach ($tipos as $tipo)
            <li>
                <div class="tipo-nombre">
                    {{ $tipo->nombre }}
                </div>
                <div class="acciones">
                    <a href="{{ route('tipoproyecto.edit', $tipo) }}">Editar</a>
                    <form action="{{ route('tipoproyecto.destroy', $tipo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
