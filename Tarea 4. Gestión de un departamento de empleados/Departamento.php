<?php

class Departamento {
    private $nombre;
    private $empleados;

    function __construct($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }

    function contratarEmpleado(Empleado $empleado) {
        $this->empleados[] = $empleado;
    }

    function obtenerListaEmpleados() {
        return $this->empleados;
    }

    function calcularCostoTotalSalarios() {
        $costo = 0;
        foreach ($this->empleados as $empleado) {
            $costo += $empleado->getSalario();
        }
        return $costo;
    }
}
?>
