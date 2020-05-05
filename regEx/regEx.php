<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 05/02/2018
 * Time: 10:28
 */

    if(preg_match("/NFactory/","Je suis en cours a la Nfactory")){
        echo 'Pattern trouvé';
    }else
        echo 'Pattern non trouvé';

    echo '<hr>';

    if(preg_match("/NFactory/i","Je suis en cours a la Nfactory")){
        echo 'Pattern trouvé';
    }else
        echo 'Pattern non trouvé';

    echo '<hr>';

    $chaine = "Ceci est un chat";
    $recherche = "/un chat|un chien/";
    if(preg_match($recherche,$chaine)){
        echo 'Pattern trouvé';
    }else
        echo 'Pattern non trouvé';

    echo '<hr>';

    $chaine = "Ceci est un chat";
    $recherche = "/Ceci est un (Chat|chien)/i";
    if(preg_match($recherche,$chaine)){
        echo 'Pattern trouvé';
    }else
        echo 'Pattern non trouvé';

    echo '<hr>';

    $chaine    = "La pause est à 11h00";
    $recheche  = "/[0-2][0-9]h[0-5][0-9]/";
    if(preg_match($recherche,$chaine)){
        echo 'Pattern trouvé';
    }else
        echo 'Pattern non trouvé';
    echo '<hr>';

    $chaine    = "3";
    $recheche  = "/[^0-2]/";
    if(preg_match($recherche,$chaine)){
        echo 'Pattern trouvé';
    }else
        echo 'Pattern non trouvé';

 /*     [[:lower:]]  // Lower
        [[:upper:]]  // Majuscule
        [[:digit:]]  // digit[0,9]
        [[:alnum:]]  // chiffres et lettres
        [[:alpha:]]  // Alphabetique
        [[:ascii:]]  // ASCII
        [[:blank:]]  // Espace et tabulation
        [[:punct:]]  // Imprimables sauf chiffres et lettres
        [[:graph:]]  // Imprimable sans espace
        [[:space:]]  // Espace blanc */

    echo '<hr>';

    $chaine    = "aaabcdddd";
    $recheche  = "/abcd{2,}/"; // should be OK
    if(preg_match($recherche,$chaine)){
        echo 'Pattern trouvé';
    }else
        echo 'Pattern non trouvé';

    echo '<hr>';

    $chaine    = "1234545454545";
    $recheche  = "/(45){2,4}/"; // should be OK
    if(preg_match($recherche,$chaine))
        echo 'Pattern trouvé';
    else
        echo 'Pattern non trouvé';

    // -- Preg_match mail
    $recherche = "/^[\w.-]+@[\w.-]+\.[a-z]{2,}$/";

    // -- Differentes types d'attaque (Nous concerne)

    // -- Injection  (1)
    // -- Ransompware
    // -- Déni de service (DDoS)
    // -- XSS (1)
    // -- Fishing (1)
    // -- Malware/spyware
    // -- KeyLogger
    // -- Troyer
    // -- 0-day (vers)(?)
    // -- faille OS
    // -- faille hardware

    // GPG -> mailvelop() -> chiffrement
    // -- Cloudflare
