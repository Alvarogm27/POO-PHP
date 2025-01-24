<?php
// Iniciar sesión
session_start();
require_once 'claseEquipo.php';
require_once 'claseFutbolista.php';

$equipo = unserialize($_SESSION['equipo']);

// Verificar si la lista de jugadores está vacía
if (empty($equipo->obtenerListaJugadores())) {
    echo "No hay jugadores en el equipo.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Equipo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Información del equipo: <?php echo $equipo->equipo(); ?></h1>

    <h2>Lista de jugadores:</h2>
    <ul>
        <?php foreach ($equipo->obtenerListaJugadores() as $jugador): ?>
            <li>
                <?php echo $jugador->MostrarDetalles(); ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <br>
    <a href="formularioJugadores.php"><button>Volver</button></a><br>
    <a href="cerrarSesion.php">Eliminar sesion</a>
</body>
</html>
