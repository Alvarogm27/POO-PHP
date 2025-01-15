<?php
// Definición de la clase Circulo
class Circulo {
    // Propiedad privada para almacenar el radio del círculo
    private $radio;

    // Inicializa el radio del círculo
    function __construct($radioinicial) {
        $this->radio = $radioinicial;
    }

    // Método para calcular el área del círculo
    function getArea() {
        return pi() * pow($this->radio, 2);
    }

    // Método para calcular el perímetro (circunferencia) del círculo
    function getPerimetro() {
        return 2 * pi() * $this->radio;
    }

    // Método para obtener el valor del radio
    function getRadio() {
        return $this->radio;
    }

    // Método para establecer un nuevo valor para el radio
    function setRadio($valorRadio) {
        $this->radio = $valorRadio;
    }

    // Método para generar una ficha con los resultados del cálculo
    function ficha() {
        // Calcula el área y el perímetro
        $area = $this->getArea();
        $perimetro = $this->getPerimetro();

        // Retorna una cadena HTML con los resultados
        return "<h1>Resultados del Círculo</h1>
        <p>Radio: " . $this->radio . "</p>
        <p>Área: $area</p>
        <p>Perímetro: $perimetro</p>";
    }
}
?>
