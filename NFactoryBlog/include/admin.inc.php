<div class="pc row admin">
        <h1>
            <strong>Liste des articles   </strong>
            <a href="index.php?page=addArticle" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter un article</a>
            <a href="index.php?page=AC" class="btn  btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter une catégorie</a>
            <strong style="float: right; color: white"><a href="index.php?page=adminusers">Gestion des utilisateurs</a></strong>
        </h1>
        <table class="table table-bordered admin " style="font-family: 'Roboto Condensed'">
            <thead ">
            <tr style="font-weight: bold;">
                <th>Nom</th>
                <th>Article</th>
                <th>Chapo</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
        <?php
        $db = Database::connect();
        $statement = $db->query('SELECT * FROM t_articles');

       while($item = $statement->fetch()){

            $content = '<ul class="list-inline">
                            <li><span class="fc"><i class="fa fa-user-circle-o" aria-hidden="true"></i> '.findAuthor($item['ID_ARTICLE'],$db).'</span></li>
                            <li><span class="fc"><i class="fa fa-calendar" aria-hidden="true"></i> '.$item['ARTDATE'].'</span></li>
                            <li><span class="fc"><i class="fa fa-commenting-o" aria-hidden="true"></i> '.calculComments($item['ID_ARTICLE'],$db).' comments</span></li>
                            <li><span class="fc"><i class="fa fa-eye" aria-hidden="true"></i> '.$item['ARTNBVIEWS'].' views</span></li>
                        </ul>';
            $content .= returnXWords(html_entity_decode($item['ARTCONTENU']),400) .'<br>';

            $post  =  '<tr>
                        <td>'. $item['ARTTITRE'] . '</td>
                        <td class ="article" style="text-align: justify; font-size: 13px">'. $content. '</td>
                        <td>'. $item['ARTCHAPO']. '</td>
                        <td>'. findCategories($item['ID_ARTICLE'],$db) . '</td>
                        <td width=300>
                        <a class="btn btn-default" href="index.php?page=view&amp;id='.$item['ID_ARTICLE'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                        <a class="btn btn-primary" href="index.php?page=update&amp;id='.$item['ID_ARTICLE'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                        <a class="btn btn-danger" href="index.php?page=delete&amp;id='.$item['ID_ARTICLE'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                        </td>
                       </tr>';
            echo $post;
        }
        Database::disconnect();
        ?>  </tbody>
        </table>
    </div>
