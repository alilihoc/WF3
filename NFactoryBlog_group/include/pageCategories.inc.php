<?php
if(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL) || !isset($_SESSION['login'])) {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}

elseif ($_SESSION['login'] == 1) {
	$connexion = connexion();

	echo ("<div id=\"afficherCategories\">");
		echo ("<h3>Affichage des catégories : </h3>");
		echo ("<ul>");

		$requete = "SELECT * FROM t_categories";

		$resultatRequete = $connexion -> query($requete);

		while ($row = $resultatRequete->fetch()) {
			echo("<li class=\"type_categorie\">" . ($row['CATLIBELLE']) . "</li>");
		}

		echo("</ul>");
	echo("</div>");

	if (isset($_POST['nouvelleCategorie'])) {

		$nomCategorie = $_POST['nomCategorie'];
		$tabErreurCategorie = array();

		if ($nomCategorie =="") {
			array_push($tabErreurCategorie, "Veuillez saisir un nom de catégorie");
		}

		if (count($tabErreurCategorie) != 0) {
			$message = "<ul>";
			for($i=0 ; $i < count($tabErreurCategorie) ; $i++) {
				$message .= "<li>" .$tabErreurCategorie[$i] . "</li>";
			}

			$message .="</ul>";
			echo($message);
			include("./include/formCreationCategories.php");
		}

		else {
			$requete = "INSERT INTO t_categories (ID_CATEGORIE, CATLIBELLE) VALUES (NULL, '$nomCategorie')";
			if ($resultatRequete = $connexion-> exec($requete)) {

				// MARCHE CORRECTEMENT 
				echo "<script type='text/javascript'>document.location.replace('./index.php?page=pageCategories');</script>";

				//MARCHE CORRECTEMENT AUSSI
				// echo '<meta http-equiv="Refresh" content="0;URL=pageCategories.inc.php">';
			}

		}
		
	}
	
	else {
		include "./include/formCreationCategories.php";
	}
	unset($connexion);	
}
	
else {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}
