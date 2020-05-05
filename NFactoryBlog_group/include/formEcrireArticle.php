<section id="ecrireArticle">

	<form action="#" method="post">
		
		<div>
			<label for="titreArticle">Titre de l'article : </label>
			<input type="text" id="titreArticle" name="titreArticle"/>
		</div>

		<div>
			<label for="chapoArticle">Sous-titre de l'article : </label>
		<input name="chapoArticle" id="chapoArticle" size="100"></input>
		</div>

		<div>
			<label for="contenuArticle">Contenu de l'article : </label>
			<textarea name="contenuArticle" id="contenuArticle"></textarea>
		</div>
		
		<?php

		$connexion = connexion();
		$requete = "SELECT * FROM T_CATEGORIES";

		$row = $connexion->query($requete);

		echo ("<div id=\"categories\">");
			echo("<label for=\"categorieArticle\">Catégories de l\'article : </label>");
			echo("<ul>");

			while($checkbox_categorie = $row -> fetch()){
				echo "<li><input type=\"checkbox\" name=\"categoriesArticle[]\" id=\"categoriesArticle\" value=\" ". $checkbox_categorie['ID_CATEGORIE'] . "\">". $checkbox_categorie['CATLIBELLE'] ."</input></li>";
			}

			echo ("</ul>");
		echo("</div>");

		echo("<div>");
			echo("<input name=\"reset\" type=\"reset\" value=\"Effacer\"/>");
			echo("<input name=\"creerArticle\" type=\"submit\" value=\"enregistrer\"/>");
		echo("</div>");			
	echo("</form>");

	unset($connexion); 
echo("</section>");
