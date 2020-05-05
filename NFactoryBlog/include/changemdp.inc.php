<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 31/01/2018
 * Time: 19:13
 */
    if($_SESSION['auth']['ID_USER'] == $_GET['id']){
        $id_user = $_GET['id'];

        if(!empty($_POST['changemdp'])){
            /*$lpsw = $_POST['lpassword'];
            $hash_psw = sha1($lpsw);
            $db = Database::connect();
            $sql = $db -> prepare('SELECT USERPASSWORD from t_users where ID_USER = ?');
            $sql -> execute([$id_user]);
            $dbpass = $sql -> fetch();
            echo $dbpass['USERPASSWORD'].'<br>';
            echo $hash_psw;*/

            if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
                $_SESSION['flash']['danger'] = "Les mots de passes ne correspondent pas";
            }else{
                $user_id = $_SESSION['auth']['ID_USER'];
                $password= $_POST['password'];
                $hpsw    = sha1($password);
                $pdo  = Database::connect();
                $pdo->prepare('UPDATE t_users SET userpassword = ? WHERE id_user = ?')->execute([$hpsw,$user_id]);
                $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";
            }

        }

    }else{
        echo '<script>redirection("index.php?page=default")</script>';
    }
    getErrors();

?>
<div class="pc">
    <div class="col-xs-8 col-xs-push-2 form">
        <h1 style="text-align: center">Changer de mot de passe</h1>
        <form action="#" method="post">
            <div class="form-group">
                <input class = "form-control" type="text" name="lpassword" id ="name" placeholder="Ancien mot de passe">
            </div>
            <div class="form-group">
                <input class = "form-control" type="text" name="password" id ="password" placeholder="Nouveau mot de passe">
            </div>
            <div class="form-group">
                <input class = "form-control" type="text" name="password_confirm" id ="password_confirm" placeholder="confirmation du nouveau mot de passe">
            </div>
            <div class="form-group">
                <input type="submit" value="Ajouté" name="changemdp" class="btn btn-info btn-lg">
                <input type="reset" value="Effacer" class="btn btn-warning btn-lg">
            </div>
        </form>
    </div>