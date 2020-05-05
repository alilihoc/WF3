<?php

function connexion() {
	try {
		$db = new PDO(URL, LOGIN, PASSWORD);		
		return $db;
	}

	catch (PDOException $e) {

		$file = fopen("./files/echecConnexionBDD.log", "a+");
		$date = date("d-m-Y H:i:s");
		
		$texte = "echec de connexion a la BDD le ". $date ." erreur : " . $e -> getMessage() .".\n\r";
		fwrite($file,$texte);
		fclose($file);

	}

}
