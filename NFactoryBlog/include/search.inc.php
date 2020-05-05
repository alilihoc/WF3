    <div class="pc row">
        <div class="col-sm-8">
            <?php
            if(isset($_POST)){
                $bdd = Database::connect();
                $articles = $bdd->query('SELECT * FROM t_articles ORDER BY ID_ARTICLE DESC');
                if(isset($_POST['q']) AND !empty($_POST['q'])) {
                    $q = htmlspecialchars($_POST['q']);
                    $articles = $bdd->query('SELECT * FROM t_articles WHERE ARTTITRE LIKE "%'.$q.'%" ORDER BY ID_ARTICLE DESC');
                    if($articles->rowCount() == 0) {
                        $articles = $bdd->query('SELECT * FROM t_articles WHERE CONCAT(ARTTITRE, ARTCONTENU,ARTCHAPO) LIKE "%'.$q.'%" ORDER BY ID_ARTICLE DESC');
                    }

                    if($articles->rowCount() > 0){
                        $res = '<h1> Résultat de recherche</h1>';
                        while($a = $articles->fetch()){
                            $res.= '<section class="post row">
                                        <div class="col-sm-4">
                                            <a href="index.php?page=view&amp;id='.$a['ID_ARTICLE'].'">
                                                <img src="./assets/img/post.jpg" alt="Post" class ="thumbnail img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-sm-8">
                                            <h3> '. findCategories($a['ID_ARTICLE'], $bdd) .'</h3>
                                            <h2> '. $a['ARTTITRE'] . '</h2>
                                                <h4><span class="fc"><i class="fa fa-user-circle-o" aria-hidden="true"></i> '.findAuthor($a['ID_ARTICLE'],$bdd).'</span>
                                                    <span class="fc"><i class="fa fa-calendar" aria-hidden="true"></i> '.$a['ARTDATE'].'</span>
                                                    <span class="fc"><i class="fa fa-commenting-o" aria-hidden="true"></i> '.calculComments($a['ID_ARTICLE'],$bdd).' comments</span>
                                                </h4>
                                            <div class="article"> '. returnXWords(html_entity_decode($a['ARTCONTENU']),225) . '</div>
                                                <br>
                                            <div class="link"><a href="index.php?page=view&amp;id='.$a['ID_ARTICLE'].'"> READ MORE >></a></div>    
                                        </div>
                                    </section>';
                        }
                        echo $res;
                    }else{
                        echo 'Aucun Résultat trouvé !';
                    }
                }
            }
            ?>
        </div>
        <?php  include_once './include/static/aside.php'?>
    </div>