<?php

$mail = $_POST['mail'];

if($_SESSION['login'] == 1) {
    echo("<script>redirection(\"index.php?page=default\")</script>");
}

elseif(($_SESSION['login'] == 0) || ($_SESSION['login'] == NULL) || !isset($_SESSION['login'])) {

    if (isset($_POST['forgotPassword'])) {

        if (filter_var($mail, FILTER_VALIDATE_EMAIL)){

            $connexion = connexion();

            $requete = "SELECT USERMAIL FROM t_users WHERE USERMAIL = '$mail'";
            $resultatRequete = $connexion -> query($requete);
            $compteResultatRequete = count($resultatRequete);

            if ($compteResultatRequete == 1) {
                $provisoire = mt_rand();
                $token = sha1($provisoire);
                $update = "UPDATE t_users SET USERPASSWORD = '$token' WHERE t_users.USERMAIL = '$mail' ";
                echo('<p>Vous avez demandé à récupérer votre mot de passe, un e-mail vient de vous être envoyé sur la boîte mail suivante : ' .$mail .'. <p/>');

                echo "<a href=\"index.php?page=accueil&pagination=1\">retour vers la page d'accueil</a>";

                if ($resultatUpdate=$connexion -> query($update)) {
                    $to = $mail;
                    $subject = 'Votre nouveau mot de passe';
                    $message = "Bonjour,\n\rVous avez demande la reinitialisation de votre mot de passe suite a un oubli.\n\r\rC'est chose faite, vous pouvez vous connecter a votre compte avec ce code : " . $provisoire . "\n\rVous pouvez ensuite dans votre espace \"mon compte\".\n\rLa Team Blog Nfactory";
                    $headers = 'From : leblog@nfactory.fr';

                    mail($to, $subject, $message, $headers);
                    }
            }

            else {
                echo('Veuillez re-saisir votre adresse mail');
            }

            unset($connexion);
        }

        else {
            echo("Veuillez entrer un email valide");
            include ("./include/formRecuperationPassword.php");
        }
        
    }

    else {
        include ("./include/formRecuperationPassword.php");
    }

}

else {
    echo("<script>redirection(\"index.php?page=default\")</script>");
}
