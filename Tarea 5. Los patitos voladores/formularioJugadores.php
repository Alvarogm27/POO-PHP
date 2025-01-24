<?php
session_start();
require_once "claseEquipo.php";
require_once "claseFutbolista.php";

// Crear o recuperar el departamento desde la sesión
if (!isset($_SESSION['equipo'])) {
    $equipo = new Equipo("LOS PATITOS VOLADORES");
    $_SESSION['equipo'] = serialize($equipo);
}
else{
    // Recupera el departamento desde la sesión
    $equipo = unserialize($_SESSION['equipo']);
}

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];

        if ($accion == 'agregar') {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $posicion = $_POST['posicion'];

            // Agregar Futbolista
            $futbolistaNuevo = new Futbolista($nombre, $edad, $posicion);
            $equipo->agregarJugador($futbolistaNuevo);
            $_SESSION['equipo'] = serialize($equipo);
        }
        elseif ($accion == 'eliminar') {
            $nombreE = $_POST['nombreE'];

            // Eliminar Futbolista
            $equipo->eliminarJugador($nombreE);
            $_SESSION['equipo'] = serialize($equipo);
    }
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularioJugador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>LOS PATITOS VOLADORES</h1>
    <h2>AGREGA AL JUGADOR AQUI</h2>
    <form action="formularioJugadores.php" method="post">
        <div>
            <label for="nombre">Nombre: <input type="text" name="nombre" id="nombre" required></label>
        </div>
        <div>
            <label for="edad">Edad: <input type="number" name="edad" id="edad" required></label>
        </div>
        <div>
            <label for="posicion">Posicion: <input type="text" name="posicion" id="posicion" required></label>
        </div>
        <input type="hidden" name="accion" value="agregar">
        <div>
            <input type="submit" value="Agregar">
        </div>
    </form>
    <h2>ELIMINA AL JUGADOR AQUI</h2>
    <form action="formularioJugadores.php" method="post">
        <div>
            <label for="nombreE">Nombre: <input type="text" name="nombreE" id="nombreE" required></label>
        </div>
        <input type="hidden" name="accion" value="eliminar">
        <div>
            <input type="submit" value="Eliminar">
        </div>
    </form>
    <a href="equipo.php">Ver equipo</a>
</body>
</html>