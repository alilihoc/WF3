<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 24/01/2018
 * Time: 18:10
 */
function returnXWords($article, $length){
    $sm = '[...]';
    if(strlen($article) > $length) $article = substr($article, 0, $length).$sm;
    return $article;

}
