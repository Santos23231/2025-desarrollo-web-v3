<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['nombre'])){
        echo "<div class='alert alert-danger'>El campo nombre es obligatorio.</div>";
        exit;   
    }
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $hora = htmlspecialchars($_POST['hora']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $reserva = "Nombre: $nombre\nTeléfono: $telefono\nFecha: $fecha\nHora: $hora\nDescripción: $descripcion\n---\n";
    $archivo = 'reservaciones.txt';
    file_put_contents($archivo, $reserva, FILE_APPEND);
    echo "<div class='alert alert-success'>Reserva guardada exitosamente.</div>";
} else {
    echo "<div class='alert alert-danger'>Método no permitido.</div>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Reservar</h1>
        <form action="procesar_reserva.php" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora:</label>
                <input type="time" id="hora" name="hora" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Reservar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<a href="/index.html">
        <button>Inicio</button>
    </a>
</html>