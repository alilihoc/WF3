<?php
function getCategories($id_cat) {
    $db = Database::connect();
    $sql = $db -> prepare('SELECT * FROM t_categories_has_t_articles inner join t_articles on t_articles_id_article = id_article where t_categories_id_categorie = ? ORDER by ARTDATE DESC');
    $sql -> execute([$id_cat]);
    $data = $sql -> fetchall();
    foreach($data as $row){
        $post = '<section class="post row">
                <div class="col-sm-4">
                    <a href="index.php?page=view&amp;id='.$row['ID_ARTICLE'].'">
                        <img src="./assets/img/post.jpg" alt="Post" class ="thumbnail img-responsive">
                    </a>
                </div>
                <div class="col-sm-8">
                    <h3> '. findCategories($row['ID_ARTICLE'], $db) .'</h3>
                    <h2> '. $row['ARTTITRE'] . '</h2>
                        <h4><span class="fc"><i class="fa fa-user-circle-o" aria-hidden="true"></i> '.findAuthor($row['ID_ARTICLE'],$db).'</span>
                            <span class="fc"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['ARTDATE'].'</span>
                            <span class="fc"><i class="fa fa-commenting-o" aria-hidden="true"></i> '.calculComments($row['ID_ARTICLE'],$db).' comments</span>
                        </h4>
                    <div class="article"> '. returnXWords(html_entity_decode($row['ARTCONTENU']),225) . '</div>
                        <br>
                    <div class="link"><a href="index.php?page=view&amp;id='.$row['ID_ARTICLE'].'"> READ MORE >></a></div>    
                </div>
              </section>';
        echo $post;
        Database::disconnect();
    }
}