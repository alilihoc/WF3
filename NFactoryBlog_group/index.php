<?php

	session_start();

	include_once "./fonctions/connexionBDD.php"; 
	include_once "./fonctions/callPage.php";
	include_once "./fonctions/callPageTitle.php";
	include_once "./fonctions/afficherCategories.php";
	include_once "./fonctions/afficherAuteur.php";
	include_once "./fonctions/creationCaptcha.php";
	include_once "./fonctions/creationLogFile.php";
	include_once "./fonctions/donneesNavigation.php";
	include_once "./fonctions/selectionAfficherArticle.php";

	include_once "./Bin/conf_connexion.php"; //fichier de définition des constantes de connexion à la BDD

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="./assets/css/screen.css">

	<!-- APPEL JS -->
	<script src="./assets/js/fonctions.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>

	<!-- appel TinyMCE -->
	<script src="./assets/js/tinymce/tinymce.min.js"></script>
	  <script>tinymce.init({ 
		    selector: 'textarea',
			branding: false});</script>
						
	<title>Blog | <?php echo(callPageTitle()); ?></title>
</head>

	<body>

		<?php	include_once("./include/header.php"); ?>

			<main>
				<?php
					callPage();
				?>
			</main>
			
		<?php	include_once("./include/footer.php"); ?>

		</div>
	</body>

	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
	
</html>
