<?php
class Circulo{
    public $radio;
    function __construct($radio_){
        $this->radio = $radio_;
    }
    function getRadio(){
       return $this->radio;
    }

    function getArea(){
        return pi() * pow($this->radio, 2);
        }
    
    function getPerimetro(){
        return 2 * pi() * $this->radio;
    }

    function getAreaR($precision){
        return round($this->getArea(), $precision);
    }

    function getPerimetroR($precision){
        return round($this->getPerimetro(), $precision);
    }

    function esCirculo(){
        if($this->radio > 0){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    } 
}







?>