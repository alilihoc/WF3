<?php

function callPage() {
	if (isset($_GET['page'])) { // je verifie si l'attribut de l'url existe
		if ($_GET['page'] == "") {
			$page = "accueil&pagination=1";
		}

		else {
			$page = $_GET['page'];
		}
	}

	elseif ($_SERVER['PHP_SELF'] === "/index.php") {
		$page = "accueil&pagination=1";
	}

	$page = "./include/" . $page . ".inc.php";
	$tableauPage = glob("./include/*.inc.php");

	if (in_array($page, $tableauPage)){
			include($page);
			return true;	
	}	

	else {
		include("./include/default.inc.php");
		return false;

	}

}
