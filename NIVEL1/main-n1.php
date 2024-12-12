<?php

//NIVEL 1
//EJERCICIO 1
require_once "Employee.php";

$trabajador1= new Employee();
$trabajador1->initialize('Juan', 6000);
$trabajador2= new Employee();
$trabajador2->initialize('Marta', 7000);
$trabajador3= new Employee();
$trabajador3->initialize('Ulises', 8000);

$trabajadores=[$trabajador1, $trabajador2,$trabajador3];

foreach($trabajadores as $trabajador){
    $trabajador->imprimir();
    $trabajador->pagaImpuestos();
    echo "\n";
}


//EJERCICIO 2
require_once "shape.php";
require_once "rectangulo.php";
require_once "triangulo.php";

$rectangulo1 = new Rectangulo(10,20);

echo "Área rectangulo: ".$rectangulo1->calcularArea(). PHP_EOL;

$triangulo1= new Triangulo (10,20);

echo "Área triángulo: ".$triangulo1->calcularArea(). PHP_EOL;

?>