<?php

class Pokerdice{

    protected int $caras;
    protected string $forma;
    protected static $contador=0;

public function __construct($caras=6){
 
    $this->caras =$caras;
   
}

public function throw(){

    $shapes= ['As', 'K', 'Q', 'J', '7', '8'];

    $this->forma = $shapes[rand(0,5)];
    self::$contador++;

}

public function shapeName(){

    echo $this->forma;

}

public static function getTotalThrows(){
    return self::$contador;
}


}


?>