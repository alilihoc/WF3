<?php

namespace App\Controller\TechNews;


use App\Controller\Helper;
use App\Entity\Article;
use App\Entity\Auteur;
use App\Entity\Categorie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use App\Service\Article\ArticleProvider;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class IndexController extends Controller
{
    use Helper;

    /**
     * Page d'accueil de notre site.
     * Configuration de notre route dans routes.yaml
     * @return Response
     */
    public function index() {
        # return new Response("<html><body><h1>Page d'Accueil</h1></body></html>");
        # $articles = $articleProvider->getArticles();
        $repository = $this ->getDoctrine()->getRepository(Article::class);

        # Articles de la bdd
        # $articles = $repository->findAll();
        $articles = $repository->findArticles(6);

        #articles en spotlight
        $spotlight = $repository->findSpotlightArticles();
        return $this->render('index/index.html.twig', [
            'articles'=>$articles,
            'spotlight'=>$spotlight
        ]);

    }

    /**
     * Page permettant d'afficher les articles d'une catégorie
     * @Route("/categorie/{libellecategorie}",
     *     name="index_categorie",
     *     requirements={"libellecategorie" = "\w+"},
     *     methods={"GET"})
     * @param Environment $twig
     * @param string $libellecategorie
     * @return Response
     */
    public function categorie(Environment $twig, $libellecategorie) {
        $categorie = $this -> getDoctrine() -> getRepository(Categorie::class)
                           -> findOneBy(['libelle' => $libellecategorie]);

        $articles = $categorie->getArticles();

        return $this->render('index/categorie.html.twig', [
            'articles'=>$articles
        ]);
    }

    /**
     * Page permettant d'afficher les articles d'un auteur
     * @Route("/auteur/{nomauteur}",
     *     name="index_auteur",
     *     requirements={"nomauteur" = "\w+"},
     *     methods={"GET"})
     * @param string $nomauteur
     * @return Response
     */
    public function auteur($nomauteur) {
        $auteur = $this -> getDoctrine() -> getRepository(Auteur::class)
            -> findOneBy(['nom' => $nomauteur]);

        $articles = $auteur->getArticles();

        return $this->render('index/auteur.html.twig', [
            'articles'=>$articles
        ]);

    }


    /**
     * Page permettant d'afficher un article
     * @see https://symfony.com/doc/current/routing.html#adding-wildcard-requirements
     * @Route("/{libellecategorie}/{slugarticle}_{id}.html", name="index_article",
     *     requirements={"idarticle"="\d+"} )
     * @param Article $article
     * @return Response
     */
    public function article(Article $article) {
        # https://symfony.com/doc/current/doctrine.html#automatically-fetching-objects-paramconverter
        # index.php/business/une-formation-symfony-a-paris_2.html

        # Récupération avec Doctrine
        # $article = $this->getDoctrine()
        #     ->getRepository(Article::class)
        #     ->find($idarticle);

        # Si aucun article n'est trouvé...
        if (!$article) {
            # On génère une exception
            # throw $this->createNotFoundException(
            #     'Nous n\'avons pas trouvé votre article ID : '.$idarticle
            # );
            # Ou on peut aussi rediriger l'utilisateur sur la page index.
            return $this->redirectToRoute('index',[],Response::HTTP_MOVED_PERMANENTLY);
        }

        # Récupération des suggestions
        $suggestions = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findArticleSuggestions($article->getId(),$article->getCategorie()->getId());

        /**
         * Lazy Loading et le Chargement des Related Objects
         * Il est important de comprendre que nous avons accès à l'objet catégorie du produit,
         * de façon AUTOMATIQUE ! Cependant, les données de la catégorie ne sont récupéré
         * par doctrine que lorsque nous en faisant la demande, et pas avant ! Ceci pour alléger
         * le chargement de votre page.
         */
        # $categorie = $article->getCategorie()->getLibelle();

        return $this->render('index/article.html.twig', [
            'article' => $article,
            'suggestions' => $suggestions,
            #   'categorie' => $categorie
        ]);
    }

    /**
     *
     * Envoi des fichier a la sidebar
     * @return Response
     */
    public function sidebar() {

        # Récupération du Répository
        $repository = $this->getDoctrine()->getRepository(Article::class);

        # Récupération des 5 derniers articles
        $articles   = $repository->findArticles(5);

        # Récupération des articles à la position "special"
        $special    = $repository->findSpecialArticles();

        return $this->render('components/_sidebar.html.twig', [
            'articles'  => $articles,
            'special'   => $special
        ]);
    }
}
