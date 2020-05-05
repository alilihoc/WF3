<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 25/01/2018
 * Time: 22:36
 */
function logged_only(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(!isset($_SESSION['auth'])){
        $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
        header('Location: index.php');
        exit();
    }
}