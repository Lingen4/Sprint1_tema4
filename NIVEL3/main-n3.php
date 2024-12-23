<?php

require_once "Cine.php";
require_once "Pelicula.php";

$pelicula1 = new Pelicula("Matrix", "Wachowski", 136);
$pelicula2 = new Pelicula("TLOTR 1", "Peter Jackson", 178);
$pelicula3 = new Pelicula("Blade", "Stephen Norrington", 120);
$pelicula4 = new Pelicula("Donnie Darko", "Richard Kelly", 113);
$pelicula5 = new Pelicula("Harry Potter", "Chris Columbus", 152);
$pelicula6 = new Pelicula("TLOTR 2", "Peter Jackson", 179);


$cine1 = new Cine("Rocafort", "Barcelona", [$pelicula1, $pelicula3]);
$cine2 = new Cine("Filmax", "Hospitalet", [$pelicula2, $pelicula4]);
$cine3 = new Cine("Cinesa", "Collblanc", [$pelicula5, $pelicula6]);
$cines = [$cine1, $cine2, $cine3];

//$cine1->mostrarPelicula();

//$cine2->setListado([$pelicula1,$pelicula2]);

//print_r($cine2);

function mostarCinesYCartelera(array $cines): void
{
    echo "TODOS LOS CINES Y CARTELERA COMPLETA\n";
    foreach ($cines as $cine) {
        $peliculas = $cine->getPeliculas();
        echo "\n\nListado cine " . $cine->getNombre() . ": ";
        foreach ($peliculas as $pelicula) {
            echo $pelicula;
        }
    }
}

function mostrarPeliculaMasLarga(array $cines): void
{
    echo "PELICULAS MÁS LARGAS\n";
    foreach ($cines as $cine) {
        echo "\n\nPelicula más larga del cine " . $cine->getNombre() . ": " .
            $cine->peliLarga();
    }
}

function buscarPorDirector(array $cines)
{
    echo "BUSCAR POR DIRECTOR\n";
    $nombreDirector = readline("Escriba el nombre del director: ");
    $mensaje = [];
    foreach ($cines as $cine) {

        $peliculasDirector = $cine->getCinePorDirector($nombreDirector);
        if ($peliculasDirector != null) {
            foreach ($peliculasDirector as $pelicula) {
                $mensajeNuevo = "La pelicula '" . $pelicula->getTitulo() .
                    "' del director '" . $pelicula->getDirector() . "' está en el cine: " . $cine->getNombre() . "\n";
                $mensaje[] = $mensajeNuevo;
            }
        }
    }
    if (count($mensaje) == 0) {
        echo "\nNo se han encontrado peliculas de '$nombreDirector' en nuestros cines";
    } else {
        foreach($mensaje as $msg){
       echo "\n".$msg;}
    };
}


$salir = false;
do {
    $pregunta = (int)readline("\nQué desea hacer? :
\n0. Salir
\n1. Mostrar toda la cartelera
\n2. Mostrar la pelicula más larga en cada cine
\n3. Buscar pelicula por director");



switch ($pregunta) {
    case 0:
        $salir = true;
        break;
    case 1:
        mostarCinesYCartelera($cines);
        break;
    case 2:
        mostrarPeliculaMasLarga($cines);
        break;
    case 3:
        buscarPorDirector($cines);
        break;
}} while ($pregunta < 0 || $pregunta > 3 || !$salir);
