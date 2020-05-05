

<div class="pc row">
    <div class="col-sm-8 form">
        <h1>Mon compte</h1>
        <?php
        if(isset($_SESSION['auth'])){
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
//                    $welcome .= " Nombre de visites = " . $_COOKIE['visite'];
            $nom     = $_SESSION['auth']['USERNAME'];
            $prenom  = $_SESSION['auth']['USERFNAME'];
            $mail    = $_SESSION['auth']['USERMAIL'];
            $pseudo  = $_SESSION['auth']['PSEUDO'];
            $dateins = $_SESSION['auth']['USERDATEINS'];
            $id_user = $_SESSION['auth']['ID_USER'];
        } else {
            echo '<script>redirection("index.php?page=default")</script>';
            exit();
        }
        ?>
        <table class="account_table no-style" style="width:100%">
            <tbody>
            <tr class="cat">
                <td class="lbl" colspan="3" style="text-align: left; background-color: #ccc;">Avatar</td>
            </tr>
            <tr>
                <td class="lbl avatar" colspan="2">Vous n'avez pas d'avatar</td>
                <td><a class="edit-item" href="index.php?page=change&amp;id=<?= $id_user ?>"><i class="fa fa-pencil" aria-hidden="true"></i><div class="tooltip">/div></a></td
            </tr>
            <tr class="cat">
                <td class="lbl" colspan="3" style="text-align: left; background-color: #ccc;">Informations personnelles</td>
            </tr>
            <tr>
                <td class="lbl">Nom&nbsp;</td>
                <td><?= $nom ?></td>
                <td><?=$id_user?></td>
            </tr>
            <tr>
                <td class="lbl">Prénom&nbsp;</td>
                <td><?= $prenom ?></td>
                <td></td>
            </tr>
            <tr>
                <td class="lbl">Pseudo &nbsp;</td>
                <td><?= $pseudo ?></td>
                <td><a class="edit-item" href="index.php?page=change&amp;id=<?= $id_user ?>"><i class="fa fa-pencil" aria-hidden="true"></i><div class="tooltip">/div></a></td>
            </tr>
            <tr>
                <td class="lbl">Email&nbsp;</td>
                <td><?= $mail ?></td>
                <td><a class="edit-item" href="index.php?page=change&amp;id=<?= $id_user ?>"><i class="fa fa-pencil" aria-hidden="true"></i><div class="tooltip">/div></a></td
            </tr>
            <tr>
                <td class="lbl">Date de création du compte</td>
                <td><?= $dateins ?>		</td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table class="no-style link-button" width="100%">
            <tbody>
            <tr >
                <td width="33%"><div  class="btn btn-default"><a href="index.php?page=changemdp&amp;id=<?=  $id_user ?>">Changer de mot de passe</a></div></td>
                <td width="33%"></td>
                <td width="33%"><div class="btn btn-default"><a href="index.php?page=delete_user&amp;id=<?= $id_user ?>">Supprimer mon compte</a></div></td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php include_once './include/static/aside.php'?>

</div>