<header>
	<ul>
		<li><a href="index.php?page=accueil&amp;pagination=1">Accueil</a></li> <!-- ?  -> préfixe la serie d'attribut -->

		<?php
		if(isset($_SESSION['login']) && $_SESSION['login'] == 0 || $_SESSION['login'] == NULL) {
			$role_session = 0;
			echo("<li><a href=\"index.php?page=inscription\">Inscription</a></li>");
			echo("<li><a href=\"index.php?page=login\">Login</a></li>");
		}

		elseif (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
			$prenom_session = $_SESSION['prenom'];
			$nom_session = $_SESSION['nom'];
			$role_session = $_SESSION['role'];

			echo("<li><a href=\"index.php?page=monCompte\">Mon compte</a></li>");

			if($role_session == 1 || $role_session == 2)
				echo("<li><a href=\"index.php?page=afficherMembres\">Voir tous les membres</a></li>");
			
			if($role_session == 1 || $role_session == 2)
				echo("<li><a href=\"index.php?page=pageCategories\">Gestion des catégories</a></li>");

			if($role_session != 5)
				echo("<li><a href=\"index.php?page=ecrireArticle\">Ecrire un article</a></li>");
			
			echo("<li><a href=\"index.php?page=logout\">Logout</a></li>");
		}

		else {
			$role_session = 0;
			echo("<li><a href=\"index.php?page=inscription\">Inscription</a></li>");
			echo("<li><a href=\"index.php?page=login\">Login</a></li>");
		}		
		?>
	</ul>

</header>