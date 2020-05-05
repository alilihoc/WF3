<?php

function creationLogFile($prenom_user,$nom_user,$action) {
    if ($file = fopen("./files/".$action.".txt", "a+")) {
        $date = date("Y-m-d H:i:s");
        $texte = $date . " - " . $action . " de " . $prenom_user . " " . $nom_user .".\n\r";

        fwrite($file, $texte);
        fclose($file);
        return true;
    }

    else {
        return false;
    }

}
