<h1>LOGIN SUR LE SITE</h1>
<?php

$_SESSION['login'] = 0;
if (isset($_POST['envoyer_formulaire_login'])) {
	
	$tabErreur_login = array();

	$mail_login = $_POST['mail_login'];
	$mdp_login = $_POST['password_login'];

	if($mail_login == "")
		array_push($tabErreur_login, "Veuillez saisir un mail");

	else {
		if (!filter_var($mail_login, FILTER_VALIDATE_EMAIL))
			array_push($tabErreur_login, "Veuillez saisir un mail valide");
		
	}

	if($mdp_login == "")
		array_push($tabErreur_login, "Veuillez saisir votre mot de passe");

	if (count($tabErreur_login) != 0) {
		$message = "<ul>";

		for($i=0 ; $i < count($tabErreur_login) ; $i++)
			$message .= "<li>" .$tabErreur_login[$i] . "</li>";

		$message .="</ul>";
		echo($message);
		include("./include/formLogin.php");
	}

	else {
		$mdp_login = sha1($mdp_login);

		$connexion = connexion();
	
		$requete = "SELECT * FROM T_USERS WHERE USERMAIL = '$mail_login' AND USERPASSWORD = '$mdp_login'";

		$resultatRequete = $connexion->query($requete);
		
		$nombre_resultatRequete  = $resultatRequete->rowCount();

		unset($connexion);

		if($nombre_resultatRequete == 0) {
			echo("le mail de login ou le mot de passe n'est pas correct");

			$action = "erreurLog";
			$prenom_user = $_SERVER['REMOTE_ADDR'];
			creationLogFile($prenom_user,$nom_user,$action);
			$_SESSION['login'] == 0; 
		}

		elseif($nombre_resultatRequete == 1){

			$_SESSION['login'] = 1;

			$row = $resultatRequete->fetch(); // recuperation de l'entree BDD
			$prenom_user = $row['USERFNAME']; // recuperation du prenom
			$nom_user = $row['USERNAME']; //récupération du nom
			$role_user = $row['T_ROLES_ID_ROLE']; // recuperation du role de l'user
			$id_user = $row['ID_USER']; //recuperation de l'id
			
			$_SESSION['nom'] = "$nom_user";
			$_SESSION['id'] = "$id_user";
			$_SESSION['prenom'] = "$prenom_user";
			$_SESSION['role'] = "$role_user";

			$action="Login";
			creationLogFile($prenom_user,$nom_user,$action);
			echo("<script>redirection(\"index.php?page=accueil&pagination=1\")</script>");
		}
		
		else {
			echo("on a un soucis, inscription a revoir");
		}
			
	}
}

else {

	include("./include/formLogin.php");
}
