<?php

class Employee
{

    private string $nombre;
    private float $sueldo;


    public function initialize($name, $salary)
    {
        $this->nombre = $name;
        $this->sueldo = $salary;
    }

    public function imprimir():void{
        
        echo "Trabajador: " .$this->nombre."\t"."Sueldo: ".$this->sueldo."-->";

        if ($this->sueldo>6000){
            echo "Debe pagar impuestos\n";
        }else{
            echo "No paga impuestos\n";
        }

        PHP_EOL;
    }

}
