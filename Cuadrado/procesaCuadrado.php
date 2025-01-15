<?php
// Incluye la clase Cuadrado
require "ClaseCuadrado.php";

// Comprueba si el formulario ha enviado el valor del lado
if (isset($_GET['lado'])) {
    // Recupera el valor del lado enviado por el formulario
    $lado = $_GET['lado'];

    // Crea una instancia de la clase Cuadrado con el valor del lado
    $cuadrado = new Cuadrado($lado);

    // Muestra los resultados en formato HTML
    echo $cuadrado->ficha();

    // Formulario para volver al menú principal
    echo "<form action='menuFigurasPlanas.html' method='get'>";
    echo "<input type='submit' value='VOLVER AL MENU'>";
    echo "</form>";
} else {
    // Mensaje de error si no se ha proporcionado el lado
    echo "No se ha introducido el lado";
}
?>
