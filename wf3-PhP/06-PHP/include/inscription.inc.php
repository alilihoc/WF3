<?php

    if(isset($_POST['formulaire'])){


        $tabErreur = array();
        $nom = $_POST['name'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['password'];


        if($_POST['name'] == ""){
            array_push($tabErreur, 'veuillez saisir votre nom -');
        } 
        if($_POST['prenom'] == ""){
            array_push($tabErreur, 'veuillez saisir votre prenom -');
        } 
        if($_POST['email'] == ""){
            array_push($tabErreur, 'veuillez saisir votre email -');
        } 
        if($_POST['password'] == ""){
            array_push($tabErreur, 'veuillez saisir votre mdp -');
        } 

        if(count($tabErreur) != 0 ){
            $message = "<ul>";
            for( $i = 0 ; $i < count($tabErreur) ; $i++ ){
                $message .= "<li>" . $tabErreur[$i] . "</li>";
            }
            $message .= "</ul>";
        } else {
            $connexion = mysqli_connect("localhost","root","","blog")
            $requete = "INSERT INTO `t_users` (`ID_USER`, `USERNOM`, `USERPRENOM`, `USERMAIL`, `USERPASSWORD`) VALUES (NULL, $nom, $prenom, $email, )"; 
            

        }
        echo ($message);
    
    } 

    include("./include/formInscription.php");
    

?>









