<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function findArticles($nbr = null)
    {
        if($nbr) :
            return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults($nbr)
            ->getQuery()
            ->getResult();
        else :
            return $this->createQueryBuilder('a')
                ->orderBy('a.id', 'DESC')
                ->getQuery()
                ->getResult();

        endif;
    }

    public function findArticleSuggestions($idarticle, $idcategorie)
    {
        return $this->createQueryBuilder('a')
                ->where('a.categorie = :categorie_id')->setParameter('categorie_id', $idcategorie)
                ->andWhere('a.id != :article_id')->setParameter('article_id', $idarticle)
                ->orderBy('a.id', 'DESC')
                ->setMaxResults(3)
                ->getQuery()
                ->getResult();
    }

    public function findSpotlightArticles(){

        return $this -> createQueryBuilder('a')
               -> where('a.spotlight = 1')
               ->getQuery()
               ->getResult();

    }

    public function findSpecialArticles(){

        return $this -> createQueryBuilder('a')
            -> where('a.special = 1')
            ->getQuery()
            ->getResult();

    }

    public function findByCategorie($idcategorie){

        return $this -> createQueryBuilder('a')
            ->where('a.categorie = :categorie_id')->setParameter('categorie_id', $idcategorie)
            ->getQuery()
            ->getResult();

    }
}
