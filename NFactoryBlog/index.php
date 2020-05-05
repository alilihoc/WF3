<?php
    session_start();
    if (!isset($_COOKIE['visite'])){
        setcookie('visite',0);
    }else{
        $nbr_visites = $_COOKIE['visite'] ;
        $nbr_visites ++ ;
        setcookie('visite',$nbr_visites);
    }
    require_once './functions/requires.php';
    include_once("./include/static/head.php");
?>
    <body>
        <div id="container">
            <?php
            include_once("./include/static/header.php");
            ?>
            <main style="min-height: calc(100vh - 80PX); padding-top: 49px;">
                <div class="container">
                    <?php include_once("./functions/callPage.php");
                    getErrors();
                    callPage();
                    ?>
                </div>
            </main>
            <?php include_once("./include/static/footer.php"); ?>
        </div>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7094c762059c8b"></script>

    </body>
</html>

