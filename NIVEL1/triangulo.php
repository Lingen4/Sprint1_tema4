<?php

class Triangulo extends Shape{


    public function calcularArea():int|float{

        $area = ($this->alto*$this->ancho)/2;
    return $area;

        
    }
}



?>