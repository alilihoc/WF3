<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action = "traitement.php" method = "POST">
        <div>
            <input type="text" name  = "longueur" placeholder = "   longueur">
        </div>
        
        <div>
            <input type="text" name  = "largeur" placeholder = "    largeur">
        </div>
        
        <div>
            <input type="text" name  = "hauteur" placeholder = "    hauteur">
        </div>

        <div>
            <input type="submit" value = "Calculer">
            <input type="reset"  value = "Reset">
        </div>
        
    </form>
</body>
</html>