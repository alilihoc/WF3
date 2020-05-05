<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 31/01/2018
 * Time: 15:57
 */
    function getComments($idarticle,$db){
            $sql = $db -> prepare('SELECT count(T_COMMENTS_ID_COMMENT) as nbrCom from t_articles_has_t_users Where t_articles_id_article = ?');
            $sql -> execute([$idarticle]);
            $nbr = $sql -> fetch();
            $nbrcom = $nbr['nbrCom'];
            $coms = '<div class="nbcom"><h3>'.$nbrcom.' Comments</h3></div>';
            $sq = $db -> prepare('SELECT * from t_articles_has_t_users inner join t_comments on id_comment = T_COMMENTS_ID_COMMENT where t_articles_id_article = ?');
            $sq -> execute([$idarticle]);
            $res = $sq -> fetchall();
            foreach ($res as $com){
                $coms .= '<ol class="comment-list">
                             <li id="comment-'.$com['ID_COMMENT'].'" class="cdepth-1">
                                <article id="div-comment-'.$com['ID_COMMENT'].'" class="comment-body">
                                    <div class="vround"> '.ucfirst(substr(findCAuthor($com['T_USERS_ID_USER'],$db),0,1)) .' </div>
                                    <div class="rarticle">
                                        <div class="author">
                                            <span><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;'.findCAuthor($com['T_USERS_ID_USER'],$db).'</span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                                            <a href="https://www.happythemes.com/demo/revenue/multiple-sites-does-it-hurt-or-help-seo/#comment-6">
                                                <time datetime="'. $com['COMDATE'].'">
                                                        '. $com['COMDATE'].'						</time>
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <p>'.$com['COMMENT'].'</p>
                                        </div><!-- .comment-content -->
                                        <div class="reply"><a href="#"> <i class="fa fa-reply" aria-hidden="true"></i> Reply</a></div>
                                    </div>
                                </article><!-- .comment-body -->
                             </li><!-- #comment-## -->
                        </ol>';
            }
            return $coms;
    }