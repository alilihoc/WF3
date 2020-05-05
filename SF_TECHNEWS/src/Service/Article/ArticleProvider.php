<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 20/02/2018
 * Time: 10:42
 */

namespace App\Service\Article;


use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

class ArticleProvider
{
    /*
     * Recupere, parse et retourne les articles
     * depuis articles.yaml
     */
    public function getArticles() {

        try {
            $articles = Yaml::parseFile(__DIR__.'/articles.yaml');
            return $articles['data'];
        } catch (ParseException $e) {
            printf('Unable to parse the YAML string: %s', $e->getMessage());
        }

        return[];

    }
}