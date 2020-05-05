<div class="pc">
    <div class="formSign col-xs-8 row col-xs-push-2">
        <h1 style="text-align: center">Inscription</h1>
        <?php
        if(isset($_POST['formulaire'])){
            if(!empty($tabErreur)){
                $alert = '<div class ="alert alert-danger "><h3>Vous n\'avez pas rempli le formulaire correctement !</h3><ul>';
                foreach ($tabErreur as $key => $value) {
                    // $arr[3] sera mis à jour avec chaque valeur de $arr...
                    $alert .= "<li style='display:block;text-align: left'> {$value}</li>";
                }
                $alert .= '</ul> </div>';
                echo $alert;
            }
        }

        ?>
        <div class="col-xs-12">
            <form action="#" method="post">
                <div class="form-group">
                    <input class = "form-control" type="text" name="name" id ="name" placeholder=" Votre nom ">
                </div>
                <div class="form-group">
                    <input class = "form-control" type="text" name="prenom" id ="prenom" placeholder=" Votre prenom ">
                </div>
                <div class="form-group">
                    <input class = "form-control" type="text" name="pseudo" id ="pseudo" placeholder=" Votre Pseudo ">
                </div>
                <div class="form-group">
                    <input class = "form-control" type="email" name="email" id ="email" placeholder="Adresse mail">
                </div>
                <div class="form-group">
                    <input class = "form-control" type="password" name="password" id ="password" placeholder=" Votre mot de passe">
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LcGbEMUAAAAAOHv7PXqpK9rPLkaBECu_8dCAwdS"></div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Envoyer" name="formulaire" class="btn btn-info btn-lg">
                    <input type="reset" value="Effacer" class="btn btn-warning btn-lg">
                </div>
            </form>
        </div>

    </div>
</div>
