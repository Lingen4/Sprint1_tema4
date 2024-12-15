<?php

class Cine {

    private $nombre;
    private $poblacion;
    private $listado;


    public function __construct(string $nombre, string $poblacion, array $listado=[])
    {
        $this-> nombre = $nombre;
        $this-> poblacion = $poblacion;
        $this-> listado =$listado;
    }

    public function setListado(array $listado): void
    {
        $this->listado = $listado;
    }

    public function agregarPelicula(Pelicula $pelicula): void
    {
        $this->listado[] = $pelicula;
    }

}



?>
