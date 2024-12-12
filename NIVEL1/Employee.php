<?php

class Employee
{

    private string $nombre;
    private float $sueldo;


    public function initialize(string $name, float $salary):void
    {
        $this->nombre = $name;
        $this->sueldo = $salary;
    }

    public function imprimir():void{
        
        echo "Trabajador: " .$this->nombre."\t"."Sueldo: ".$this->sueldo;
        
    }

    public function pagaImpuestos():void{

        if ($this->sueldo>6000){
            echo "\t--> Debe pagar impuestos\n";
        }else{
            echo "\t--> No paga impuestos\n";
        }
    }



}
