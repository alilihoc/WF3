<?php 
    $x = rand(-10000,10000);
    echo ("valeur de départ $x");
    if  ($x > 0)
        $message = 'valeur positive ';
    elseif ($x < 0)
        $message = 'valeur negative';
    else 
        $message = "valeur nulle";

    echo ("<p> $message </p> ");


    $p = rand();
    $message = "<h1> $p </h1>" ;
    
    for ( $i = 1 ; $i <= 19999 ; $i++ ){
        if ( $p % $i == 0 )
            $message .= " <p>  $p est un multiple de $i </p>"  ;

    }

    echo ($message);




    echo (' <h1> Switch Case </h1> ');
    $s = 2 ; 
    if ($s == 0) {
        echo "i égal 0";
    } elseif ($s == 1) {
        echo "i égal 1";
    } elseif ($s == 2) {
        echo "i égal 2 <br> ";
    }

    switch ($s) {
        case 0:
            echo "i égal 0";
            break;
        case 1:
            echo "i égal 1";
            break;
        case 2:
            echo "i égal 2";
            break;
    }



?>