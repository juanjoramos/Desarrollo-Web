<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Mascotas</h1>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>Precio</th>
                    <th>Fecha Ingreso</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->tipo_animal }}</td>
                        <td>{{ $mascota->raza ?? 'Sin raza' }}</td>
                        <td>{{ $mascota->edad }} años</td>
                        <td>${{ number_format($mascota->precio, 2) }}</td>
                        <td>{{ $mascota->fecha_ingreso->format('d/m/Y') }}</td>
                        <td>
                            @if($mascota->vendido)
                                <span class="badge bg-danger">Vendido</span>
                            @else
                                <span class="badge bg-success">Disponible</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>