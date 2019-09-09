<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;                         /*Bibliothèque :Indication des routes par des annotations/commentaires */ 

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        //Lien de la Page d'Accueil
        return $this->render('accueil/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function  about()
    {
        //Lien de la Page About
        return $this->render('accueil/About.html.twig');
    }
}
