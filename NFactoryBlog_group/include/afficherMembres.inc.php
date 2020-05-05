<?php

if(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL) || !isset($_SESSION['login'])) {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}

elseif ($_SESSION['login'] == 1) {

	$connexion = connexion();

	echo("<div id=\"afficherMembres\">");
	echo("<h3>TOUS LES MEMBRES</h3>");
	
	$requete = "SELECT * FROM T_USERS";

	$resultatRequete = $connexion -> query($requete);
	
	while ($row = $resultatRequete->fetch()) {

		switch ($row['T_ROLES_ID_ROLE']) {
			case 1:
				$role = "Super Admin";
				break;
				
			case 2:
				$role = "Administrateur";
				break;
			
			case 3:
				$role = "Modérateur";
				break;
			
			case 4:
				$role = "Rédacteur";
				break;
				
			case 5:
				$role = "Utilisateur simple";
				break;
		}

		echo("
			<form action=\"#\" method=\"post\">
				<ul class=\"membre_" . $row['ID_USER'] . ">
					<li class=\"nom_membre\"> Nom : " . ($row['USERNAME']) . "</li>
					<li class=\"prenom_membre\"> Prenom : " . ($row['USERFNAME']) . "</li>
					<li class=\"role_membre\">Role : " . $role . "</li>	
					<li>
						<select name = \"nouveauRole[]\" class=\"nouveau_role_membre_". $row['ID_USER'] . "\">
							<option value=\"1\">Super Admin</option>
							<option value=\"2\"> Administrateur</option>
							<option value=\"3\">Modérateur</option>
							<option value=\"4\">Rédacteur</option>
							<option value=\"5\">Utlisiateur</option>
						</select>

					</li>	
				</ul>");		
	}

	echo ("<input type=\"submit\" name=\"modifierRole\" value=\"Modifier le role\"
		</form>");
	unset($db);	
	echo("</div>");
}

else {
	echo("<script>redirection(\"index.php?page=default\")</script>");
}
