<?php

class Pelicula {

    private $nombre;
    private $director;
    private $duracion;


    public function __construct(string $nombre, string $director, int|float $duracion)
    {
        $this->nombre=$nombre;
        $this->director=$director;
        $this->duracion=$duracion;
   
    }
    public function __toString()
    {
        $datos =  "\n\nPelicula: ".$this->nombre;
         $datos.= "\nDirector: ".$this->director;
         $datos.= "\nDuración: ".$this->duracion." minutos";

         return $datos;
    }

    public function getTitulo(){

        return $this->nombre;
    }

    public function getTime(){

        return $this->duracion;
    }

    public function getDirector(){

        return $this->director;
    }


    }
