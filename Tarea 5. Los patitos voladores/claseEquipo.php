<?php

class Equipo{
    private $nombreEquipo;

    private $jugadores = [];

    function __construct($nombreEquipo){
        $this->nombreEquipo = $nombreEquipo;
    }
    function agregarJugador(Futbolista $jugador){
        $this->jugadores[] = $jugador;
    }
    function obtenerListaJugadores() {
        return $this->jugadores;
    }
    function eliminarJugador($nombreE){
        foreach($this->jugadores as $key => $jugador){
            if ($jugador->getNombre() == $nombreE) { 
                unset($this->jugadores[$key]);
            
            }
        }
        array_values($this->jugadores);
    }
    function MostrarDetalles() {
        foreach ($this->jugadores as $jugador) {
            return $jugador->MostrarDetalles();
        }
    }

    function equipo(){
        return $this->nombreEquipo;
    }
    
}