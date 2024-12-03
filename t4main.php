<?php

//NIVEL 2
//EJERCICIO 1
include "NIVEL2\\pokerdice.php";

$dado1= new Pokerdice();

echo $dado1->throw();
$dado1->shapeName();
echo "\n";

$salir = false;
while ($salir == false){
for ($i=0; $i<5;$i++){
    $dadoNuevo = new Pokerdice();
    echo $dadoNuevo->throw();
    $dadoNuevo->shapeName();
    echo "\t";
}
$confirmacion=readline("Quieres volver a tirar? S/N--> ")[0];
if (is_string($confirmacion)){
    if (strtolower($confirmacion)=='n'){
        $salir = true;
    }
}
}

echo "Tiradas totales:".Pokerdice::getTotalThrows();


?>