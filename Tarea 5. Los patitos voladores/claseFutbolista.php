<?php
Class Futbolista{
    private $nombre;
    private $edad;
    private $posicion;

    function __construct($nombre, $edad, $posicion){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->posicion = $posicion;
    }
    function MostrarDetalles(){
        return "Nombre: $this->nombre, Edad: $this->edad, Posicion: $this->posicion";
    }
    function getNombre(){
        return $this->nombre;
    }
}