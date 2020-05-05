<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">NFactoryBlog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active a1"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
                            Home<span class="sr-only">(current)</span></a></li>
                    <li class="a2"><a href="#">NEWS</a></li>
                    <li class="dropdown a2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            $db = Database::connect();
                            $sql = $db -> query("SELECT * FROM t_categories");
                            $categories =  $sql -> fetchall();
                            foreach($categories as $category){
                                echo '<li><a class = "dropdown-item" href="index.php?page=category&amp;id='.$category['ID_CATEGORIE'].'">'.$category['CATLIBELLE'].'</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                </ul>

                <!--<ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>-->
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" action="index.php?page=search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search">
                            <div class="input-group-btn search">
                                <button class="btn btn-default" type="submit">
                                    <a href ="index.php?page=search">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (!isset($_SESSION['auth'])) {
                        echo "<li class='a3'><a href=\"index.php?page=inscription\"><span class=\"glyphicon glyphicon-user\"></span> S'inscrire</a></li>
                            <li class='a4'><a href=\"index.php?page=login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a></li>";
                    }
                    else {
                        echo "<li class='a5'><a href=\"index.php?page=admin\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ADMIN</a></li>
                              <li class='a6'><a href=\"index.php?page=moncompte\"><span class=\"glyphicon glyphicon-user\"></span> ACCOUNT</a></li>
                              <li class='a7'><a href=\"index.php?page=logout\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i></a></li>";
                    }
                    ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>




