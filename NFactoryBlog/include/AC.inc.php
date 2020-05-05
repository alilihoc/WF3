<?php

if(isset($_POST['Addcategory']) ){

    if(!empty($_POST['category'])) {
        $category   = $_POST['category'];
        $connexion = Database::connect();
        $sql = $connexion -> prepare('SELECT CATLIBELLE FROM t_categories Where CATLIBELLE = ?');
        $sql -> execute([$category]);
        $res = $sql -> fetch();
        if ($res){
            $_SESSION['flash']['danger']= "Catégorie déjâ présente";
        }else{
            $sql = $connexion -> prepare('INSERT into t_categories (CATLIBELLE) VALUES(?)');
            $sql -> execute(array($category));
            echo '<script>redirection("index.php?page=admin")</script>';
            $_SESSION['flash']['success'] = "Catégorie ajoutée";
            exit();
        }
    }
    getErrors();
}
include "./include/forms/formAddCategory.php";
