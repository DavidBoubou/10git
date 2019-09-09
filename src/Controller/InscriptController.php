<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;                                     /*Bibliothèque :Indication des routes par des annotations/commentaires */ 
use Symfony\Component\HttpFoundation\Request  ;                                     /*Bibliothèque permettant de gérer les requêtes*/                   
use App\Entity\Inscription;                                                         /*Bibliothèque des class entité*/ 
use App\Form\InscriptType;                                                          /*Bibliothèque du formulaire*/
use Doctrine\Common\Persistence\ObjectManager;
//use Symfony\Component\Routing\Annotation\Route;                                     /*Bibliothèque :Indication des routes par des annotations/commentaires */ 
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;           /*Bibliothèque d'encodage*/ 
use Symfony\Component\Validator\Validator\ValidatorInterface;

class InscriptController extends AbstractController
{
    /**
     * @Route("/Inscription",name="inscription")
     */
     public function form(Request $request,ObjectManager $manager,ValidatorInterface $validator,UserPasswordEncoderInterface $crypt)
    {
        $formContent = new Inscription();                                          /*Création d'un nouvel objet */ 
        $formBuilder = $this->createForm(InscriptType::class,$formContent);        /*Création du formulaire d'inscription*/       
        $errors = $validator->validate($formContent);
        

        $formBuilder->handleRequest($request);                                    /*Obtention de la requête POSt*/
              
        
        //Si le formulaire est soumit et valide
        if($formBuilder->isSubmitted() && $formBuilder->isValid())
                {
                  //Encodage du mot depasse
                  $encode_password=$crypt->encodePassword($formContent,$formContent->getPassword());
                  $formContent->setPassword($encode_password);
          /*          
                //Traitement des erreurs de champs
                if (count($errors) > 0) {
                    $errorsString = (string) $errors;
            
                    return $this->render('inscript/Registry.html.twig',[
                        'lien2'=>'vous nous connaissez déjà',
                        'errors' => $errors,
                        'lien1'=>"Besoin d'aide ?",
                        'inscript'=>$formBuilder->createView(),
                    ]);
                }   
            */
                    //Récolte des données du formulaire
                  $formContent=$formBuilder->getData();

                    //Communication avec la BDD
                    //Envoie des données
                    //$manager=$this->getDoctrine()->getManager();
                    $manager  ->persist($formContent);
                    $manager  ->flush();

                    //Alerte évènement : inscription réussie
                    $this->addFlash(
                                     'notice',
                                     'Inscription réussie,un email vous a été envoyé.'
                                     );
                    /*Envoie d'email*/
                    //____________

                    //Redirection de la page avec succes      
                    return $this->redirectToRoute('accueil');     
                }
    
        //Lien de la Page d'inscription
        return $this->render('inscript/Registry.html.twig',[
            'errors' => $errors,
            'lien2'=>'vous nous connaissez déjà',
            'lien1'=>"Besoin d'aide ?",
            'inscript'=>$formBuilder->createView(),
        ]);
    }



}
