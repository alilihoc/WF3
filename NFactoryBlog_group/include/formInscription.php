<section id="inscription">

	<form action="#" method="post">
		
		<div>
			<label for="nom">ENTREZ VOTRE NOM : </label>
			<input type="text" id="nom" name="nom"/>
		</div>
		<div>
			<label for="prenom">ENTREZ VOTRE PRÉNOM : </label>
			<input type="text" id="prenom" name="prenom" />
		</div>
		
		<div>
			<label for="mail">SAISISSEZ VOTRE MAIL : </label>
			<input type="text" id="mail" name="mail"/>
		</div>

		<div>
			<label for="password">ENTREZ UN MOT DE PASSE : </label>
			<input type="password" id="password" name="password"/>
		</div>

		<div>
			<label for="password2">RE-ENTREZ LE MOT DE PASSE : </label>
			<input type="password" id="password2" name="password2"/>
		</div>
		
		<div>
			<input type="hidden" name="captchaGenerated" value="<?php echo $captcha=creationCaptcha();?>" />
			<label for="captcha">VEUILLEZ RECOPIEZ LA CHAINE SUIVANTE :  <?php echo($captcha); ?></label>
			<input type="text" id="captcha" name="captcha"  value="" />
		</div>
		

		<div>
			<input name="reset" type="reset" value="Effacer"/>
			<input name="envoyerFormulaire" type="submit" value="Envoyer"/>
		</div>
		
	</form>



</section>