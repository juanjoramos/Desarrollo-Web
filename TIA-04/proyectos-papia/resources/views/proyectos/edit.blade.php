<!-- resources/views/proyectos/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
</head>
<body>
    <h1>Editar Proyecto</h1>
    <form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método HTTP para actualizar -->
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $proyecto->nombre }}" required>
        <br>


        <label for="tipo">Tipo:</label>
        <select name="tipo" required>
            <option value="PA" {{ $proyecto->tipo == 'PA' ? 'selected' : '' }}>PA</option>
            <option value="PIA" {{ $proyecto->tipo == 'PIA' ? 'selected' : '' }}>PIA</option>
        </select>
        <br>


        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $proyecto->descripcion }}</textarea>
        <br>


        <label for="metodologia">Metodología:</label>
        <input type="text" name="metodologia" value="{{ $proyecto->metodologia }}" required>
        <br>


        <label for="docente">Docente:</label>
        <input type="text" name="docente" value="{{ $proyecto->docente }}" required>
        <br>


        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('proyectos.index') }}">Cancelar</a>
</body>
</html>