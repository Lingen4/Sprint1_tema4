<?php

//NIVEL 1
//EJERCICIO 1
include "NIVEL1\Employee.php";

$trabajador1= new Employee();
$trabajador1->initialize('Juan', 6000);
$trabajador2= new Employee();
$trabajador2->initialize('Marta', 7000);
$trabajador3= new Employee();
$trabajador3->initialize('Ulises', 8000);

$trabajador1->imprimir();
$trabajador2->imprimir();
$trabajador3->imprimir();


//EJERCICIO 2
include "NIVEL1\\rectangulo.php";

$rectangulo1 = new Rectangulo(10,20);

$rectangulo1->calcularArea();



?>