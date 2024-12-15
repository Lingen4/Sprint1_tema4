<?php

class Pelicula {

    private $nombre;
    private $director;
    private $duracion;


    public function __construct(string $nombre, string $director, int|float $duracion):void
    {
        $this->nombre=$nombre;
        $this->director=$director;
        $this->duracion=$duracion;
    }
        
    }
