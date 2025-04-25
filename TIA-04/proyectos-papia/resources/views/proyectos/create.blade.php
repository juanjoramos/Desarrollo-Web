<!-- resources/views/proyectos/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="tipo">Tipo:</label>
        <select name="tipo" required>
            <option value="PA">PA</option>
            <option value="PIA">PIA</option>
        </select>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea>
        <br>
        <label for="metodologia">Metodología:</label>
        <input type="text" name="metodologia" required>
        <br>
        <label for="docente">Docente:</label>
        <input type="text" name="docente" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>