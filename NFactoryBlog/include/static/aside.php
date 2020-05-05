<div class="col-sm-4">

    <section class="blockL blockA">
       <div class="row">
           <div class="col-xs-12">
               <h2>  // Derniers articles </h2>
               <hr>
               <?php
               $db        = Database::connect();
               $sql2      = $db -> query('SELECT * FROM `t_articles` ORDER BY `ARTDATE` DESC LIMIT 5');
               $articles  = $sql2 -> fetchAll();
               foreach ($articles as $article ){
                   echo '<div class="row">
                              <div class="col-xs-6 limg">
                                     <img  src="./assets/img/post.jpg" class="thumbnail img-responsive">
                              </div>
                              <div class="col-xs-6 aside">
                                    <p>'.$article['ARTTITRE'].'</p>
                                    <span class="fc"><i class="fa fa-calendar" aria-hidden="true"></i> '.$article['ARTDATE'].'</span>
                              </div>
                         </div>';
               }
               Database::disconnect();
               ?>
           </div>
       </div>
    </section>

    <section class="blockC blockL">
        <h2> // Catégories </h2>
        <hr>
        <ul class="list-horizontal">
            <?php
            $db   = Database::connect();
            $sql3 = $db -> query('SElECT * FROM t_categories');
            $categories = $sql3 -> fetchAll();
            foreach($categories as $category){
                $lien = '<a href = "index.php?page=category&amp;id='.$category['ID_CATEGORIE'].'">'.$category['CATLIBELLE'].'</a>';
                echo "<li style='text-align: left;font-family: 'Roboto condensed'><h3>" . $lien ."</h3></li>";
            }
            ?>
        </ul>
    </section>
    <section class="blockL blockS">
        <h2> // Social</h2>
        <hr>
        <ul class="list-inline icon-circle icon-zoom social-icons">
            <li> <a href="#"><i class="fa fa-github"></i></a></li>
            <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </section>
</div>