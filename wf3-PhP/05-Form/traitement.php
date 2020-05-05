<?php

include "functions.php";

$longueur = $_POST['longueur'];
$largeur  = $_POST['largeur'] ;
$hauteur  = $_POST['hauteur'] ;

// $toto = "La longueur est de $longueur et la larguer est de $largeur";
// echo ($toto);

$surface = calculer($longueur, $largeur, $hauteur);

if (calculerSurface($longueur, $largeur, $hauteur)){
    echo ("La surface est de : $surface m²" );
} else {
    echo ('verifie tes données ');
}


