<?php
// Definición de la clase Cuadrado
class Cuadrado {
    // Propiedad privada para almacenar el valor del lado del cuadrado
    private $lado;

    // Inicializa el lado del cuadrado
    function __construct($ladoinicial) {
        $this->lado = $ladoinicial;
    }

    // Método para calcular el área del cuadrado
    function getArea() {
        return pow($this->lado, 2);
    }

    // Método para calcular el perímetro del cuadrado
    function getPerimetro() {
        return 4 * $this->lado;
    }

    // Método para obtener el valor del lado
    function getLado() {
        return $this->lado;
    }

    // Método para establecer un nuevo valor para el lado
    function setLado($valorLado) {
        $this->lado = $valorLado;
    }

    // Método para generar una ficha con los resultados del cálculo
    function ficha() {
        // Calcula el área y el perímetro
        $area = $this->getArea();
        $perimetro = $this->getPerimetro();

        // Retorna una cadena HTML con los resultados
        return "<h1>Resultados del Cuadrado</h1>
        <p>Lado: " . $this->lado . "</p>
        <p>Área: $area</p>
        <p>Perímetro: $perimetro</p>";
    }
}
?>
