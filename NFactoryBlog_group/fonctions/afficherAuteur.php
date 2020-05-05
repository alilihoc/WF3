<?php

function afficherAuteur($idArticle){
	$bdd = connexion();
	
	$requete = "SELECT * FROM T_USERS INNER JOIN T_ARTICLES_HAS_T_USERS ON T_ARTICLES_HAS_T_USERS.T_USERS_ID_USER = T_USERS.ID_USER WHERE T_ARTICLES_has_T_USERS.T_ARTICLES_ID_ARTICLE = $idArticle";

	$resultatRequete = $bdd->query($requete);
	$resultat = $resultatRequete->fetchAll();
	
	return $resultat;

	unset($bdd);

}
