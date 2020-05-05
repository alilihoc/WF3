<?php

if(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL) || !isset($_SESSION['login'])) {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}

elseif ($_SESSION['login'] == 1) {
	echo "<h1>ECRIRE UN ARTICLE</h1>";

	if (isset($_POST['creerArticle'])) {
		$tabErreur_article = array();

		$idAuteurArticle = $_SESSION['id'];
		$nom_user = $_SESSION['nom'];
		$prenom_user = $_SESSION['prenom'];
		$roleAuteurArticle = $_SESSION['role'];

		$titreArticle = $_POST['titreArticle'];
		$contenuArticle = $_POST['contenuArticle'];
		$chapoArticle = $_POST['chapoArticle'];
		$categoriesArticle = $_POST['categoriesArticle'];

		if($titreArticle == ""){
			array_push($tabErreur_article, "Veuillez saisir un titre");
		}

		if($contenuArticle == ""){
			array_push($tabErreur_article, "Veuillez saisir du texte");
		}

		if($chapoArticle == ""){
			array_push($tabErreur_article, "Veuillez saisir le sous titre");
		}

		if($categoriesArticle == ""){
			array_push($tabErreur_article, "Veuillez saisir au minimum une catégorie");
		}

		if (count($tabErreur_article) != 0) {
			$message = "<ul>";

			for($i=0 ; $i < count($tabErreur_article) ; $i++) {
				$message .= "<li>" .$tabErreur_article[$i] . "</li>";
			}

			$message .="</ul>";
			echo($message);
			include("./include/formEcrireArticle.php");
		}

		else {

			$connexion = connexion();
			
			$titreArticle = addslashes(htmlentities($titreArticle));
			$contenuArticle = addslashes(htmlentities($contenuArticle));
			$chapoArticle = addslashes(htmlentities($chapoArticle));

			$requete = "INSERT INTO t_articles (ID_ARTICLE, ARTTITRE, ARTCHAPO, ARTCONTENU, ARTDATE) VALUES (NULL, '$titreArticle', '$chapoArticle', '$contenuArticle', NOW())";

			$resultatRequete = $connexion->exec($requete);
			$idArticle = $connexion->lastInsertId();

			$requeteAuteur = "INSERT INTO T_ARTICLES_has_T_USERS (T_ARTICLES_ID_ARTICLE, T_USERS_ID_USER, T_USERS_T_ROLES_ID_ROLE) VALUES ('$idArticle', '$idAuteurArticle', '$roleAuteurArticle')";
			
			$nbreToursBoucle = count($categoriesArticle);

			for($i=0; $i < $nbreToursBoucle; $i++){
				$requeteCategories = "INSERT INTO T_CATEGORIES_has_T_ARTICLES (T_CATEGORIES_ID_CATEGORIE, T_ARTICLES_ID_ARTICLE) VALUES ('$categoriesArticle[$i]', '$idArticle')";
				$connexion->exec($requeteCategories);
			}

			$connexion->exec($requeteAuteur);

			echo(" Votre article a bien été créé !");

			$action="Article-post";
			if (!creationLogFile($prenom_user,$nom_user,$action)){
				die("Erreur du fichier log.");
			}
		
			unset($connexion);
		}

	}

	else {

		include("./include/formEcrireArticle.php");
	}

}

else {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}
