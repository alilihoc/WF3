<?php
function pagination($perpage){
    $db = Database::connect();
    $sql = $db -> query('SELECT count(ID_ARTICLE) as nbrArt FROM t_articles');
    $data = $sql -> fetch();
    $nbrArt = $data['nbrArt'];
    isset($_GET['p']) ? $pagec = $_GET['p'] : $pagec = 1;
    $nbPage = ceil($nbrArt/ $perpage);
    $index = ($pagec - 1 ) * $perpage;
    $query ="SELECT * FROM t_articles ORDER by ARTDATE DESC LIMIT $index,$perpage";
    $sql = $db -> query($query);
    while($row = $sql -> fetch()){
    $post = '<section class="post row">
                <div class="col-sm-4">
                    <a href="index.php?page=view&amp;id='.$row['ID_ARTICLE'].'">
                        <img src="./assets/img/post.jpg" alt="Post" class ="thumbnail img-responsive"/>
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
    $pagination = "<div class=\"pagination\">";
    for ($i = 1 ; $i <= $nbPage ; $i++){
    $pagination .="<a href=\"index.php?p=$i\"> $i /</a>";
    }
    $pagination .= "</div>";
    echo $pagination;
}

