<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 25/01/2018
 * Time: 22:57
 */
    if(isset($_GET['id']) && isset($_GET['token'])){
        $pdo = Database::connect();
        $req = $pdo->prepare('SELECT * FROM t_users WHERE ID_USER = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');
        $req->execute([$_GET['id'], $_GET['token']]);
        $user = $req->fetch();
        if($user){
            if(!empty($_POST)){
                if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']){
                    include_once('./include/db.php');
                    $db = Database::connect();
                    $user_id  = $_GET['id'];
                    $password = $_POST['password'];
                    $mdp      = sha1($password);
                    $sql = $db->prepare('UPDATE t_users SET USERPASSWORD = ?, reset_at = NULL, reset_token = NULL WHERE ID_USER = ?');
                    $sql ->execute([$mdp,$user_id]);
                    $_SESSION['flash']['success'] = 'Votre mot de passe a bien été modifié';
                    $_SESSION['auth'] = $user;
                    echo '<script>redirection("index.php?$page=moncompte")</script>';
                    exit();
                }
            }
        }else{
            $_SESSION['flash']['error'] = "Ce token n'est pas valide";
            header('Location: index.php');
            exit();
        }
    }else{
        header('Location: index.php');
        exit();
    }
?>
<div class="pc row">
    <div class="col-xs-8 col-xs-push-2">
        <h1> Changer de Mot de Passe
        <form method="post" action="#">
            <div class="form-group">
                <label for="password">Mot de passe </label>
                <input class ="form-control" type="password" name="password" />
            </div>
            <div class="form-group">
                <label for="password_confirm">Vérification </label>
                <input class ="form-control" id = 'password_confirm' type="password" name="password_confirm" />
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer" name="update" class="btn btn-info btn-lg">
                <input type="reset" value="Effacer" class="btn btn-warning btn-lg">
            </div>
        </form>
    </div>
</div>
