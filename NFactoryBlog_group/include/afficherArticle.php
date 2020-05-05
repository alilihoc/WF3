<div id="derniers_articles">
	<h3>Découvrez nos articles :</h3>
</div>
			
<?php

$connexion = connexion();

$articleParPage=5;

$numeroPage = $_GET['pagination'];

$requeteTotalArticle = "SELECT COUNT(*) AS nbreArt FROM T_ARTICLES";
$resultQuery = $connexion->query($requeteTotalArticle);
$nbreTotalArticles = $resultQuery->fetchColumn();


$pagination = (($numeroPage - 1) * $articleParPage);

$totalpage  = ceil($nbreTotalArticles/$articleParPage); //Ceil arrondit à l'entier supérieur

$requete = "SELECT * FROM T_ARTICLES ORDER BY ARTDATE DESC LIMIT $pagination,$articleParPage" ;
$resultatRequete = $connexion->query($requete);

while ($row = $resultatRequete->fetch()) {
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
		$categoriesArticle .= "<li>" . $tableauCategories[$i]['CATLIBELLE'] ." </li>";
	}
	$categoriesArticle .= "</ul>";

	for($i = 0; $i < count($tableauAuteurs); $i++) {
		$auteurs = $tableauAuteurs[$i]['USERFNAME'] . " " . $tableauAuteurs[$i]['USERNAME'] . ", "; 
	}

	echo("<ul>
		<li class=\"titre_article\"><a href=\"index.php?page=fullPageArticle&amp;idArticle=".$row['ID_ARTICLE']."\">" .html_entity_decode($row['ARTTITRE'])."</a></li>
		<li class=\"date_article\">écrit le " .$jour_article." ".$date_article."  par : " . $auteurs . "</li>
		<li class=\"categories_articles_affichage\">Catégories : " . $categoriesArticle . "</li>
		<li class=\"chapo_article\">" .$row['ARTCHAPO']. "</li>
		<li class=\"texte_article\">" . html_entity_decode($row['ARTCONTENU'] ."</li>
		<li><hr></li>
		</ul>"));
}


	echo "<div class=\"pagination\">Page : ";
	for ($i = 1 ; $i <= $totalpage ; $i++) {
		$url = "<a href=\"index.php?page=accueil&amp;pagination=$i\">";
		$url .= $i;
		$url .= "</a>";
		echo $url;
	}
	echo("</div>");
