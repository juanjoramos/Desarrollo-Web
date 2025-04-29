<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Mascota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Agregar Nueva Mascota</h1>

    <form action="{{ url('/mascotas') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Animal</label>
            <input type="text" name="tipo_animal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Raza</label>
            <input type="text" name="raza" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Ingreso</label>
            <input type="date" name="fecha_ingreso" class="form-control" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="vendido" class="form-check-input" value="1">
            <label class="form-check-label">Vendido</label>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ url('/mascotas') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
