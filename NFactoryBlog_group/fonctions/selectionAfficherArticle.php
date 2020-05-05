<?php

function selectionAfficherArticle($idArticle) {  
	$connexion = connexion();
	
	$requete = "SELECT * FROM t_articles WHERE ID_ARTICLE = '$idArticle'";
	
    if ($resultatRequete = $connexion->query($requete)){
        $row = $resultatRequete->fetch();
        
		donneesNavigation($idArticle);
		
		return $row;
    }
    
    else{
        echo("<script>redirection(\"index.php?page=default\")</script>");
    }
    
	unset($connexion);
}
