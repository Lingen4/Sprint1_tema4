<?php

require_once "Cine.php";
require_once "Pelicula.php";

$pelicula1 = new Pelicula ("Matrix", "Wachowski", 136);
$pelicula2 = new Pelicula ("TLOTR", "Peter Jackson", 178);
$pelicula3 = new Pelicula ("Blade", "Stephen Norrington", 120);
$pelicula4 = new Pelicula ("Donnie Darko", "Richard Kelly", 113);
$pelicula5 = new Pelicula ("Donnie Darko", "Richard Kelly", 113);


$cine1 = new Cine ("Rocafort", "Barcelona", []);
$cine2 = new Cine ("Filmax", "Hospitalet", []);
$cine3 = new Cine ("Cinesa", "Collblanc", []);



?>