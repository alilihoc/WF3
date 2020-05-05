<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 30/01/2018
 * Time: 21:58
 */
    $user_id = $_GET['id'];
    $token = $_GET['token'];
    $pdo = Database::connect();
    $req = $pdo->prepare('SELECT * FROM t_users WHERE ID_USER = ?');
    $req->execute([$user_id]);
    $user = $req->fetch();
    if($user && $user['confirmation_token'] == $token ){
        $pdo->prepare('UPDATE t_users SET confirmation_token = NULL WHERE ID_USER = ?')->execute([$user_id]);
        $_SESSION['flash']['success'] = 'Votre compte a bien été validé';
        $_SESSION['auth'] = $user;
        echo '<script>redirection("index.php")</script>';
        exit();
    }else{
        $_SESSION['flash']['danger'] = "Ce token n'est plus valide";
        echo '<script>redirection("index.php")</script>';
        exit();
    }