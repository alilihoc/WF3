<?php
if(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL))
echo("<script>redirection(\"index.php?page=default\")</script>");

elseif ($_SESSION['login'] == 1) {
	$action="Logout";
	if (creationLogFile($_SESSION['prenom'], $_SESSION['nom'],$action)) {
	session_destroy();
	echo("<script>redirection(\"index.php?page=accueil&pagination=1\")</script>");
	}

}
	
else {
		echo("<script>redirection(\"index.php?page=default\")</script>");
}
