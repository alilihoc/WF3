<?php
if(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL) || (!isset($_SESSION['login']))) { 
	echo("<script>redirection(\"index.php?page=default\")</script>");
}

elseif ($_SESSION['login'] == 1) {
	echo "<h1>Mon compte</h1>";

	$id = $_SESSION['id'];
	$connexion = connexion();

	if (!isset($_POST['envoyer_formulaire_mon_compte'])){

		$requete = "SELECT * FROM T_USERS WHERE ID_USER = '$id'";

		$resultatRequete = $connexion -> query($requete);
		
		$row = $resultatRequete->fetch(); // recuperation de l'entree BDD

		$prenom = $row['USERFNAME']; // recuperation du prenom
		$nom = $row['USERNAME'];
		$email = $row['USERMAIL'];

		include("./include/formMonCompte.php");
	}

	else {
		$nom_form = $_POST['nom'];
		$prenom_form = $_POST['prenom'];
		$mail_form = $_POST['mail'];
		$password1 = $_POST['password'];
		$password2 = $_POST['password2'];

		$requete = "SELECT * FROM T_USERS WHERE ID_USER = '$id'";

		$resultatRequete = $connexion->query($requete);
		
		$row = $resultatRequete -> fetch(); // recuperation de l'entree BDD

		$prenom = $row['USERFNAME']; // recuperation du prenom
		$nom = $row['USERNAME'];
		$email = $row['USERMAIL'];

		// Modification du nom

		if($nom_form !== $nom) {

			$nom = $nom_form;
			$requete_modif_nom = "UPDATE T_USERS SET USERNAME = '$nom_form' WHERE ID_USER = '$id'";

			if ($connexion->exec($requete_modif_nom) == 1)
				echo "Modification du nom effectuée<br>";
			
			else 
				die("la requete de modification du nom ne marche pas");
		}

		// Modification du prénom

		if($prenom_form !== $prenom) {

			$prenom = $prenom_form;
			$requete_modif_prenom = "UPDATE T_USERS SET USERFNAME = '$prenom_form' WHERE ID_USER = '$id'";
			if ($connexion->exec($requete_modif_prenom) == 1)
				echo "Modification du prénom effectuée<br>";
			
			else
				die("la requete de modification de prenom ne marche pas");
		}

		// Modificationn du password
		if(!($password1 == "" && $password2 == "")) { 
			if($password1 == $password2) {
				$mdp_form = sha1($password1);

				$requete_modif_mdp = "UPDATE T_USERS SET USERPASSWORD = '$mdp_form' WHERE ID_USER = '$id'";

				if ($connexion->exec($requete_modif_mdp) == 1)
					echo "Modification du mot de passe effectuée<br>";
				
				else
					die("la requete de modification de mdp ne marche pas");	
			}

			else
				echo("<p class=\"erreur\">Veuillez entrer le même mot de passe dans les deux champs</p>");
		}  

		include("./include/formMonCompte.php");	
	}

	unset($connexion);
}

else {
echo("<script>redirection(\"index.php?page=default\")</script>");
}
