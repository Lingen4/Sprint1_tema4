<?php

class Pokerdice{

    protected string $forma;
    protected array $shapes = ['As', 'K', 'Q', 'J', '7', '8'];
    protected static $contador=0;




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