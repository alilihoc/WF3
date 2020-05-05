<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 04/03/2018
 * Time: 21:18
 */

namespace App\Controller\TechNews;


use App\Entity\Article;
use App\Entity\Newsletter;
use App\Form\NewsletterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewsletterController extends Controller
{
    /**
     * @\Symfony\Component\Routing\Annotation\Route("/newsletterm", name="newsletter_m")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newsletter(Request $request) {

        $form = $this->createForm(NewsletterType::class);

        # Traitement des données POST
        $form->handleRequest($request);

        # Vérification des données du Formulaire
        if ($form->isSubmitted() && $form->isValid()) :

            # Récupération des données
            /** @var $newslettersub Newsletter  */
            $newslettersub = $form->getData();

            # Insertion en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($newslettersub);
            $em->flush();

            return $this->redirectToRoute('index');

        endif;

        # Affichage du Formulaire Newsletter
        return $this->render('newsletter/subscribe.html.twig', [
            'form' => $form->createView()
        ]);

    }

}