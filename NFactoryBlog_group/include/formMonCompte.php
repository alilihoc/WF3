<section id="inscription">

	<form action="#" method="post">

		<div>
			<p>VOTRE MAIL : <?php echo($email);?></p><br>
		</div>

		<div>
		<label for="nom">MODIFIER VOTRE NOM : </label>
			<input type="text" id="nom" name="nom" value="<?php echo($nom);?>">
		</div>
		<div>
			<label for="prenom">MODIFIER VOTRE PRÉNOM : </label>
			<input type="text" id="prenom" name="prenom" value="<?php echo($prenom);?>">
		</div>
		
		

		<div>
			<label for="password">ENTREZ UN NOUVEAU MOT DE PASSE : </label>
			<input type="password" id="password" name="password"/>
		</div>

		<div>
			<label for="password2">RE-ENTREZ LE NOUVEAU MOT DE PASSE : </label>
			<input type="password" id="password2" name="password2"/>
		</div>

		<div>
			<input name="envoyer_formulaire_mon_compte" type="submit" value="Modifier"/>
		</div>
		
	</form>

</section>
