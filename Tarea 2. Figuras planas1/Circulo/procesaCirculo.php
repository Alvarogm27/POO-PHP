<?php
// Incluye la clase Circulo
require "ClaseCirculo.php";

// Comprueba si el formulario ha enviado el valor del radio
if (isset($_GET['radio'])) {
    // Recupera el valor del radio enviado por el formulario
    $radio = $_GET['radio'];

    // Crea una instancia de la clase Circulo con el valor del radio
    $circulo = new Circulo($radio);

    // Muestra los resultados en formato HTML
    echo $circulo->ficha();

    // Formulario para volver al menú principal
    echo "<form action='menuFigurasPlanas.html' method='get'>";
    echo "<input type='submit' value='VOLVER AL MENU'>";
    echo "</form>";
} else {
    // Mensaje de error si no se ha proporcionado el radio
    echo "No se ha introducido el radio";
}
?>
