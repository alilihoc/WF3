<?php

function donneesNavigation($idArticle) {
    $message = " avec les informations suivante : ".$_SERVER['HTTP_USER_AGENT'] ." pour la consultation de l'article numero ". $idArticle; 
    
    if(creationLogFile($_SERVER['REMOTE_ADDR'],$message, "infosNavigation")){
        
        return true;
    }

    else {
        return false;
    }
    
}
