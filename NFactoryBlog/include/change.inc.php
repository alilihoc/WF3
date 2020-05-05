<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 31/01/2018
 * Time: 20:44
 */

    if(isset($_POST['change']) && !empty($_GET['id'])){
            $tabErreur = array();
            $id_user = $_SESSION['auth']['ID_USER'];
            $pseudo = $_POST['pseudo'];
            if($_POST['pseudo'] == ""){
                $tabErreur['pseudo'] = 'veuillez saisir votre pseudo ';
            } else {
                $pdo = Database::connect();
                $req = $pdo -> prepare('SELECT ID_USER From t_users where pseudo = ?');
                $req -> execute([$_POST['pseudo']]);
                $user = $req -> fetch();
                if($user){
                    $tabErreur['pseudo'] = "Ce Pseudo est déja pris ";
                }
                Database::disconnect();
            }

            if(empty($tabErreur)){
                $pdo = Database::connect();
                $sql = $pdo -> prepare('UPDATE t_users set PSEUDO = ? WHERE ID_USER = ?');
                $sql -> execute(array($pseudo,$id_user));
                Database::disconnect();
                $_SESSION['flash']['success'] = "Votre pseudo bien été modifié";
                echo '<script>redirection("index.php?page=moncompte")</script>';
                exit();
            }
        }
        getErrors();

?>
<div class="pc">
    <div class="formSign col-xs-8 row col-xs-push-2">
        <h1 style="text-align: center">Changer Pseudo </h1>
        <?php
        if(isset($_POST['change'])){
            if(!empty($tabErreur)){
                $alert = '<div class ="alert alert-danger "><ul>';
                foreach ($tabErreur as $key => $value) {
                    // $arr[3] sera mis à jour avec chaque valeur de $arr...
                    $alert .= "<li style='display:block;text-align: left'>{$key} : {$value}</li>";
                }
                $alert .= '</ul> </div>';
                echo $alert;
            }
        }

        ?>
        <div class="col-xs-12">
            <form action="#" method="post">
                <div class="form-group">
                    <input class = "form-control" type="text" name="pseudo" id ="pseudo" placeholder=" Votre Pseudo ">
                </div>
                <div class="form-group">
                    <input type="submit" value="Envoyer" name="change" class="btn btn-info btn-lg">
                    <input type="reset" value="Effacer" class="btn btn-warning btn-lg">
                </div>
            </form>
        </div>

    </div>
</div>