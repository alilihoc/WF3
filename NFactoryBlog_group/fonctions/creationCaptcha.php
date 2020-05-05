<?php

function creationCaptcha() {
    $str = ""; // initialisation de la chaine générée pour la captcha
    $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; //initialisation de la chaine de caractere de reference
    
    $nbr_char = strlen($char); // extrait le noombre de caractere de la chaine

    for ($i = 0 ; $i < 10 ; $i++) { // boucle servant à générer la chaine aléatoire
        $str .= $char[rand(0,($nbr_char - 1))];
    }
    
    return $str;
}
