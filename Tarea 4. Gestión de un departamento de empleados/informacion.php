<?php
// Iniciar sesión
session_start();
require_once 'Empleado.php';
require_once 'Departamento.php';

// Recuperar el departamento desde la sesión
if (!isset($_SESSION['departamento'])) {
    echo "No hay datos del departamento disponibles.";
    exit;
}

$departamento = unserialize($_SESSION['departamento']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Departamento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Información del departamento: <?php echo $departamento->getNombre(); ?></h1>

    <h2>Lista de empleados:</h2>
    <ul>
        <?php foreach ($departamento->obtenerListaEmpleados() as $empleado): ?>
            <li>
                <?php echo $empleado->getNombre(); ?> - Salario: <?php echo $empleado->getSalario(); ?> €
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Costo total de salarios:</h2>
    <p><?php echo $departamento->calcularCostoTotalSalarios(); ?> €</p>

    <br>
    <a href="Formulario.php"><button>Volver</button></a>
</body>
</html>
