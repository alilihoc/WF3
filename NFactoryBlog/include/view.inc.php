<div class="pc row">
    <div class="col-sm-8" style="box-shadow: 1px 0 0 black">
        <?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $db = Database::connect();
            $sql = $db -> prepare('SELECT * FROM t_articles WHERE ID_ARTICLE = ?');
            $sql -> execute([$id]);
            $row = $sql -> fetch();
            addView($row['ID_ARTICLE'],$db);
                echo  '<section class="post row">
                            <div class="col-xs-12 vpost">
                                <h3> '. findCategories($row['ID_ARTICLE'], $db) .'</h3>
                                <h2> '. $row['ARTTITRE'] . '</h2>
                                    <h4><span class="fc"><i class="fa fa-user-circle-o" aria-hidden="true"></i> '.findAuthor($row['ID_ARTICLE'],$db).'</span>
                                        <span class="fc"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['ARTDATE'].'</span>
                                        <span class="fc"><i class="fa fa-commenting-o" aria-hidden="true"></i> '.calculComments($row['ID_ARTICLE'],$db).' comments</span>
                                        <span class="fc"><i class="fa fa-eye" aria-hidden="true"></i> '.$row['ARTNBVIEWS'].' views</span>
                                    </h4>
                                 <a href="index.php?page=view&amp;id='.$row['ID_ARTICLE'].'">
                                    <img src="./assets/img/post.jpg" alt="Post" class ="thumbnail img-responsive">
                                </a>   
                                <div class="article"> '. html_entity_decode($row['ARTCONTENU']) . '</div>
                                    <br>
                            <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                                <div class="addthis_inline_share_toolbox vlink"></div>
                                '.getComments($row['ID_ARTICLE'],$db).'
                             </div>
                        </section>';

            Database::disconnect();
        }

        ?>


    </div>
    <?php include_once './include/static/aside.php'?>;

</div>