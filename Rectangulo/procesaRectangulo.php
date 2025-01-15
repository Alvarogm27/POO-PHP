<?php
// Incluye el archivo donde se define la clase Rectangulo
require "ClaseRectangulo.php";

// Comprueba si los parámetros 'base' y 'altura' han sido enviados en la solicitud GET
if (isset($_GET['base']) && isset($_GET['altura'])) {
    // Recupera los valores enviados por el formulario
    $base = $_GET['base'];
    $altura = $_GET['altura'];

    // Crea una nueva instancia de la clase Rectangulo con los valores proporcionados
    $rectangulo = new Rectangulo($base, $altura);

    // Muestra la ficha con los resultados del cálculo
    echo $rectangulo->ficha();

    // Muestra un formulario para regresar al menú principal
    echo "<form action='menuFigurasPlanas.html' method='get'>";
    echo "<input type='submit' value='VOLVER AL MENU'>";
    echo "</form>";
} else {
    // Si no se han proporcionado los parámetros, muestra un mensaje de error
    echo "No se ha introducido el lado";
}
?>
