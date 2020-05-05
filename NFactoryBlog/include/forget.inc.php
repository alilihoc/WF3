<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 25/01/2018
 * Time: 22:19
 */
if(!empty($_POST) && !empty($_POST['email'])){
    $pdo = Database::connect();
    $req = $pdo->prepare('SELECT * FROM t_users WHERE USERMAIL = ?');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();
    if($user){
        $reset_token = str_random(60);
        $header = "From: noreply@example.com\r\n";
        $header.= "MIME-Version: 1.0\r\n";
        $header.= "Content-Type: text/html; charset=UTF-8\r\n";
        $header.= "X-Priority: 1\r\n";
        $header.= 'X-Mailer: PHP/' . phpversion();
        $sql = $pdo -> prepare('UPDATE t_users SET reset_token = ?, reset_at = NOW() WHERE ID_USER = ?');
        $sql -> execute([$reset_token, $user['ID_USER']]);
        $_SESSION['flash']['success'] = 'Les instructions du rappel de mot de passe vous ont été envoyées par emails';
        mail($_POST['email'], 'Réinitiatilisation de votre mot de passe', "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien\n\nhttp://NFactoryBlog/index.php?page=reset&amp;id={$user['ID_USER']}&token=$reset_token",$header);
        header('Location: index.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Aucun compte ne correspond à cet adresse';
    }
}
?>
<div class="pc">
    <div class="col-xs-8 col-xs-push-2">
        <h1 style="text-align: center">Mot-de-passe oublié</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="mail">Adresse mail</label>
                <input class = "form-control" type="text" name="email" id ="email">
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer" name="Addcategory" class="btn btn-info btn-lg">
                <input type="reset" value="Effacer" class="btn btn-warning btn-lg">
            </div>
        </form>
    </div>

