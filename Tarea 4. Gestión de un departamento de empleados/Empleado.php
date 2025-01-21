<?php
class Empleado {
    private $id;
    private $nombre;
    private $salario;

    function __construct($id, $nombre, $salario) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getSalario() {
        return $this->salario;
    }

    function aumentarSalario($porcentaje) {
        if ($porcentaje >= 0 && $porcentaje <= 100) {
            $this->salario = $this->salario + ($this->salario * $porcentaje / 100);
        }
    }
}
?>
