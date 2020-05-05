<?php

$row = selectionAfficherArticle($_GET['idArticle']);
$jour_article = date('N', strtotime($row['ARTDATE']));
				
	switch ($jour_article) {
				case 1:
					$jour_article = "Lundi";
					break;
					
				case 2:
					$jour_article = "Mardi";
					break;
				
				case 3:
					$jour_article = "Mercredi";
					break;
				
				case 4:
					$jour_article = "Jeudi";
					break;
					
				case 5:
					$jour_article = "Vendredi";
					break;
				
				case 6:
					$jour_article = "Samedi";
					break;
				
				case 7:
					$jour_article = "Dimanche";
					break;
	
	}

	$date_article = date('d-m-Y à H:i:s', strtotime($row['ARTDATE']));

	$idArticle = $row['ID_ARTICLE'];
	$tableauCategories = afficherCategories($idArticle);
	$tableauAuteurs = afficherAuteur($idArticle);
	$categoriesArticle = "<ul class=\"affichageCategories\">";

	for($i = 0; $i < count($tableauCategories); $i++){
		$categoriesArticle .= "<li>" . $tableauCategories[$i]['CATLIBELLE'] . "</li>" ." ";
	}

	$categoriesArticle .= "</ul>";

	for($i = 0; $i < count($tableauAuteurs); $i++){
		$auteurs = $tableauAuteurs[$i]['USERFNAME'] . " " . $tableauAuteurs[$i]['USERNAME'] . ", <br/>"; 
	}

	echo("<ul >
			<li class=\"titre_article\">".html_entity_decode($row['ARTTITRE'])." <span class=\"date_article\">écrit le " .$jour_article." ".$date_article."  par : " . $auteurs . "</span></li><br/>
			<li class=\"categories_articles_affichage\">Catégories : " . $categoriesArticle . "</li><br/>
			<li class=\"chapo_article\">" .$row['ARTCHAPO']. "</li><br/>
			<li class=\"texte_article\">" . html_entity_decode($row['ARTCONTENU'] ."</li><br/>
		</ul>"));

		
