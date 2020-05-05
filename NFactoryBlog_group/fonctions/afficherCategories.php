<?php

function afficherCategories($idArticle){
	$bdd = connexion();
	
	$requete = "SELECT CATLIBELLE FROM T_CATEGORIES INNER JOIN T_CATEGORIES_HAS_T_ARTICLES ON T_CATEGORIES_HAS_T_ARTICLES.T_CATEGORIES_ID_CATEGORIE = T_CATEGORIES.ID_CATEGORIE WHERE T_ARTICLES_ID_ARTICLE = $idArticle";

	$resultatRequete = $bdd->query($requete);
	$resultat = $resultatRequete->fetchAll();
	
	return $resultat;

	unset($bdd);

}
