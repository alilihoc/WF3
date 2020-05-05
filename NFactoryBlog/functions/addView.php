<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 30/01/2018
 * Time: 12:20
 */

    function addView($idarticle,$bdd){
        $req = $bdd -> prepare('SELECT ARTNBVIEWS from t_articles Where ID_ARTICLE = ?');
        $req -> execute([$idarticle]);
        $nbrArt = $req -> fetch();
        $nbrArt = $nbrArt['ARTNBVIEWS'];
        $nbrArt = $nbrArt +1 ;
        $bdd -> prepare('UPDATE t_articles set ARTNBVIEWS = ? WHERE ID_ARTICLE = ?')->execute([$nbrArt,$idarticle]);

    }