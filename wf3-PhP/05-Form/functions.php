<?php


function calculerSurface( $longueur, $largeur) {
    if ($longueur > 0 && $largeur > 0 ) {
    return $longueur * $largeur; 
    }
    return false;
}

function calculerVolume($longueur, $largeur, $hauteur){
    if ($longueur > 0 && $largeur > 0 && $hauteur > 0 ){
    return $longueur * $largeur * $largeur;
    }
}

function calculer($longueur, $largeur, $hauteur){
    if($longueur > 0 && $largeur > 0 && $hauteur > 0 ){
        return calculerVolume($longueur, $largeur, $largeur);
    }

    elseif($longueur > 0 && $largeur > 0 && $hauteur == "" ){
        return calculerSurface($longueur, $largeur);
    }

    else{
        return false ;
    }
}