<?php

class Cine
{

    private $nombre;
    private $poblacion;
    private $listado;


    public function __construct(string $nombre, string $poblacion, array $listado = [])
    {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->listado = $listado;
    }

    public function setListado(array $listado): void
    {

        $this->listado = $listado;
    }
    public function getListado(): array
    {
        return $this->listado;
    }

    public function getNombre(): string
    {
        return $this->nombre . " ($this->poblacion)";
    }

    public function getPeliculas()
    {

        return array_map(fn($pelicula) => (string)$pelicula, $this->listado);
    }

    public function getCinePorDirector(string $nombreDirector)
    {

        $peliculas = $this->getListado();
        $peliculasDirector = [];
        foreach ($peliculas as $pelicula) {
            if (strtolower($pelicula->getDirector()) == strtolower($nombreDirector)) {
                $peliculasDirector = [$pelicula];
            }
        }

        return $peliculasDirector;
    }

    public function peliLarga(): object
    {

        $peliculas = $this->listado;
        $duracion = 0;
        $peliculaLarga = null;
        foreach ($peliculas as $pelicula) {

            if ($duracion < ($pelicula->getTime())) {
                $duracion = $pelicula->getTime();
                $peliculaLarga = $pelicula;
            }
        }
        return $peliculaLarga;
    }
}
