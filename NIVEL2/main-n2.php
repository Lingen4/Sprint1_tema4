<?php

//NIVEL 2
//EJERCICIO 1
require_once "pokerdice.php";

$dados=[];
for ($i=0; $i<5;$i++){
    $dado = new Pokerdice ();
    $dados[]= $dado;
}

print_r($dados);

$salir = false;
while (!$salir){

foreach($dados as $dado){
    $dado->throw();
    $dado->shapeName();
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