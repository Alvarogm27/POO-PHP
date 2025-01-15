<?php
// Definición de la clase Rectangulo
class Rectangulo {
    // Propiedades privadas para la base y altura del rectángulo
    private $base;
    private $altura;

    // Inicializa la base y la altura
    function __construct($baseinicial, $alturainicial) {
        $this->base = $baseinicial;
        $this->altura = $alturainicial;
    }

    // Método para calcular el área del rectángulo
    function getArea() {
        return $this->base * $this->altura;
    }

    // Método para calcular el perímetro del rectángulo
    function getPerimetro() {
        return (2 * $this->base) + (2 * $this->altura);
    }

    // Método para obtener el valor de la base
    function getBase() {
        return $this->base;
    }

    // Método para obtener el valor de la altura
    function getAltura() {
        return $this->altura;
    }

    // Método para establecer un nuevo valor para la base
    function setBase($valorBase) {
        $this->base = $valorBase;
    }

    // Método para establecer un nuevo valor para la altura
    function setAltura($valorAltura) {
        $this->altura = $valorAltura;
    }

    // Método para generar una ficha con los resultados del cálculo
    function ficha() {
        // Calcula el área y el perímetro
        $area = $this->getArea();
        $perimetro = $this->getPerimetro();

        // Retorna una cadena HTML con los resultados
        return "<h1>Resultados del Rectángulo</h1>
        <p>Base: " . $this->base . "</p>
        <p>Altura: " . $this->altura . "</p>
        <p>Área: $area</p>
        <p>Perímetro: $perimetro</p>";
    }
}
?>
