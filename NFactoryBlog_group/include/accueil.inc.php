<?php

if(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL) || !isset($_SESSION['login'])) {
	$nom_session = "";
	echo("<h2>Bienvenue $nom_session</h2>");
	include("./include/afficherArticle.php");
}

elseif ($_SESSION['login'] == 1) {
	$nom_session = $_SESSION['prenom'];
	echo("<h2>Bienvenue $nom_session</h2>");
	include("./include/afficherArticle.php");
}

else {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}
