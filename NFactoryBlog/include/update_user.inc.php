<?php

if(isset($_GET['id'])){

    $id = checkInput($_GET['id']);
    $nameError = $firstnameError = $pseudoError = $mailError = $name = $firstname = $pseudo = $mail = $isRelated = $userError = $mdpError = "";

    if(isset($_POST['updateUser'])){
        $name      = $_POST['name'];
        $firstname = $_POST['prenom'];
        $mail      = $_POST['mail'];
        $pseudo    = $_POST['pseudo'];
        $role      = $_POST['role'];
        $password  = $_POST['password'];
        $mdp       = sha1($password);
        $isSuccess = true ;
        $isRelated = false;

        if(empty($pseudo)){
            $pseudoError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }

        if(empty($mail)){
            $mailError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }

        $db = Database::connect();
        $sq = $db -> prepare('SELECT * FROM t_users WHERE USERMAIL = ? AND PSEUDO = ? AND T_ROLES_ID_ROLE = ?');
        $sq -> execute([$mail,$pseudo,$role]);

        if ($sq -> rowCount() > 1){
            $isRelated = true ;
            $isSuccess = false;
            $_SESSION['flash']['danger'] = 'Rôle déja existant !';
        }

        if($isSuccess && !$isRelated){
        // -- Push de l'utilisateur
            $sql = $db -> prepare('INSERT into t_users (username, userfname, pseudo ,usermail, USERDATEINS, T_ROLES_ID_ROLE,USERPASSWORD ) VALUES(?,?,?,?,?,?,?)');
            $sql -> execute(array($name,$firstname,$pseudo, $mail, date('Y-m-d H-m-s'),$role,$mdp));
            Database::disconnect();
            $_SESSION['flash']['success'] = 'Rôle ajouté!';
            echo '<script>redirection("index.php?page=adminusers")</script> ';
            exit();

        }  // -- ./Success

    }else {
        $pdo       = Database::connect();
        $sql       = $pdo -> prepare('SELECT * FROM t_users WHERE ID_USER = ?');
        $sql       -> execute([$id]);
        $user      = $sql -> fetch() ;
        $name      = $user['USERNAME'];
        $firstname = $user['USERFNAME'];
        $mail      = $user['USERMAIL'];
        $pseudo    = $user['PSEUDO'];
        $role      = $user['T_ROLES_ID_ROLE'];
        Database::disconnect();
    }
    getErrors();
    include './include/forms/formUpdateUser.php';
}
