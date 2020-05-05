<?php

function verifCaptcha() {
    $str = include("./fonctions/creationCaptcha.php");

    return $str;
}
