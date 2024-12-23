<?php

class Pokerdice{

    private string $forma;
    private array  $shapes;
    private static $contador=0;


    public function __construct()
    {
        $this->shapes = ['As', 'K', 'Q', 'J', '7', '8'];
        shuffle($this->shapes); 
    }

public function throw(){
    
    $this->forma = $this->shapes[rand(0,5)];
    self::$contador++;

}

public function shapeName(){

    echo $this->forma."\t";

}

public static function getTotalThrows(){
    return self::$contador;
}

}


?>