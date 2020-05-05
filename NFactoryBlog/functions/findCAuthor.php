<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 31/01/2018
 * Time: 17:15
 */function findCAuthor($id_user,$dbb){
    $sql = $dbb -> prepare('SELECT pseudo from `t_users` WHERE ID_USER = ?');
    $sql -> execute([$id_user]);
    $auth = $sql -> fetch();
    return $auth['pseudo'];
}
