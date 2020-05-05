<?php

function callPageTitle() {
	if($titre = $_GET['page']) {
		return strtoupper($titre);
	}

	else {
		return ("NFACTORYBLOG");
	}	
	
}

