<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $hora = htmlspecialchars($_POST['hora']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $reserva = "Nombre: $nombre\nTeléfono: $telefono\nFecha: $fecha\nHora: $hora\nDescripción: $descripcion\n---\n";
    $archivo = 'reservaciones.txt';
    file_put_contents($archivo, $reserva, FILE_APPEND);
    echo "Reserva guardada exitosamente.";
} else {
    echo "Método no permitido.";
}
?>

<form action="procesar_reserva.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required>
    
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required>
    
    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" required>
    
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea>
    
    <button type="submit">Reservar</button>
</form>
