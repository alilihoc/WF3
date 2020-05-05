<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="./assets/css/screen.css" type="text/css" rel="stylesheet" />
    <title>Blog</title>
</head>
<body>
    <div id="container">
        <?php include_once("./include/header.php");?>
        <main>
            <?php
            if (isset($_GET['page']) && $_GET['page'] != "") {
                $page = $_GET['page'];
            }

            else {
                $page = "default";
            }
            
            $page = "./include/" . $page . ".inc.php";
            $pages = glob('./include/*inc.php');
            
            if(in_array($page,$pages)){

                include($page);
            }
            else {
            
                include("./include/default.inc.php");
            }

            
            include_once("./include/footer.php");

            ?>
        </main>
    </div>
</body>
</html>


