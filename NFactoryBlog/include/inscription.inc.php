    <?php

        if(isset($_POST['formulaire'])){
            $secretKey = "6LcGbEMUAAAAAA9vcTnVYPH2KfI5W3nlrNrJn-Id";
            $responseKey = $_POST['g-recaptcha-response'];
            $userIP = $_SERVER['REMOTE_ADDR'];$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
            $response = file_get_contents($url);
            $response = json_decode($response);

            if ($response->success){
                $tabErreur = array();
                $nom = $_POST['name'];
                $prenom = $_POST['prenom'];
                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                $mdp = $_POST['password'];

                if($_POST['name'] == ""){
                    $tabErreur['username'] = 'Veuillez saisir votre nom ';
                }

                if($_POST['prenom'] == ""){
                    $tabErreur['userfname'] = 'Veuillez saisir votre prenom ';
                }

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

                if($_POST['email'] == "" || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    $tabErreur['email'] = "Votre E-mail n'est pas valide";
                } else {
                    $req = $pdo -> prepare('SELECT ID_USER From t_users where usermail = ?');
                    $req -> execute([$_POST['email']]);
                    $user = $req -> fetch();
                    if($user){
                        $tabErreur['email'] = "Cet email est déja utilisé";
                    }
                }

                if($_POST['password'] == "" ){
                    $tabErreur['password'] =  'Veuillez saisir votre mdp ';
                }

                if(empty($tabErreur)){
                    $pdo = Database::connect();
                    $sql = $pdo -> prepare('INSERT into t_users (username, userfname, pseudo ,usermail ,userpassword, USERDATEINS, T_ROLES_ID_ROLE, confirmation_token ) VALUES(?,?,?,?,?,?,?,?)');
                    $mdpr = sha1($_POST['password']);
                    $token = str_random(60);
                    $sql -> execute(array($nom,$prenom,$pseudo, $email,$mdpr, date('Y-m-d H-i-s'),5,$token));
                    mail($_POST['email'], 'Confirmation de votre compte', "Votre compte a bien été validé");
                    $user_id = $pdo->lastInsertId();
                    Database::disconnect();
                    mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nlocalhost/NFactoryBlog.com/index.php?page=confirm&id=$user_id&token=$token");
                    $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
                    echo '<script>redirection("index.php")</script>';
                    exit();
                }
            }else{
                echo '<h2>Verification failed</h2>';
            }
        }


include("./include/forms/formInscription.php");














