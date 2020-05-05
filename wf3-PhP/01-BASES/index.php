<?php 
$titre   = '<h1> Titre </h1>';
$message = '<p> Ceci est un message </p>';
$prenom  = 'Hocine';
$prenom .= ' Alili';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhP1</title>
</head>
<body>
    <?php 
    echo $titre;
    echo $message;
    echo ("<p> Bonjour \"$prenom\" </p>");


    ?>
</body>
</html>
z