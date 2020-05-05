<?php

if($_SESSION['login'] == 1) {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}

elseif(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL) || !isset($_SESSION['login'])){
	echo "<h1>INSCRIPTION SUR LE SITE</h1>";

	if(isset($_POST['envoyerFormulaire'])) {
		$tabErreur = array();
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$mdp = $_POST['password'];
		$mdp2 = $_POST['password2'];
		$captcha = $_POST['captcha'];
		$captchaGenerated = $_POST['captchaGenerated'];
		
			
		if($nom == "") 
			array_push($tabErreur, "Veuillez saisir votre nom");
		
		if($prenom == "") 
			array_push($tabErreur, "Veuillez saisir votre prenom");
		
		if($mail== "")
			array_push($tabErreur, "Veuillez saisir votre mail");
		
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) 
			array_push($tabErreur, "Veuillez saisir un mail valide");
		
		if($mdp == "") 
			array_push($tabErreur, "Veuillez saisir votre mot de passe");
		
		if($mdp2 == "")
			array_push($tabErreur, "Veuillez re-saisir votre mot de passe");
		
		if($mdp !== $mdp2)
			array_push($tabErreur, "Merci de saisir le même mot de passe");

		if($captcha == "") 
			array_push($tabErreur, "Merci de saisir le captcha");
				
		if($captcha != $captchaGenerated){
			array_push($tabErreur, "Merci de saisir le bon captcha");
		}
	
		if (count($tabErreur) != 0) {
			$message = "<ul>";

			for($i=0 ; $i < count($tabErreur) ; $i++) {
				$message .= "<li>" .$tabErreur[$i] . "</li>";
			}

			$message .="</ul>";
			echo($message. "<br><br>");

			include("./include/formInscription.php");
		}

		else {

			$connexion = connexion();
			
			$requeteRecherche = "SELECT * FROM T_USERS WHERE USERMAIL = '$mail'";

			$resultatRequeteRecherche = $connexion->query($requeteRecherche);

			$nombre_resultatRequeteRecherche  = $resultatRequeteRecherche-> rowCount();

			if($nombre_resultatRequeteRecherche == 0){
				$mdp = sha1($mdp);

				$requete = "INSERT INTO t_users (ID_USER, USERNAME,USERFNAME, USERMAIL, USERPASSWORD, USERDATEINS, T_ROLES_ID_ROLE) VALUES (NULL, '$nom', '$prenom', '$mail', '$mdp', NULL, 5)";
				

				if ($resultatInscription = $connexion->exec($requete)) {
				$to = $mail;
				$subject = "Votre inscription au Blog";
				$message = "Merci ".$prenom . " ". $nom." pour votre inscription sur notre blog. \n\rVoici vos informations : \n\rmail de login : ".$mail." \npassword :  ".$_POST['password'].".\n\rGardez ces infos precieusement.\n\rLa Team Blog Nfactory";
				$headers = "From : leblog@nfactory.fr";

				mail($to, $subject, $message, $headers);
				}
				echo("<script>redirection(\"index.php?page=login\")</script>");
				
				unset($connexion);
			}

			else {
				echo ("Veuillez saisir un autre email, il existe deja un compte enregistré avec cet email");
			}

		}

	}

	else {
			include("./include/formInscription.php");
		}
	}

else {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}
