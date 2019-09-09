<?php

namespace App\Form;

use App\Entity\Inscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Composant du formulaire
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Validator\Constraints\Length ;

class InscriptType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    //Description du formulaire
        $builder
        
        //Champs de la base de données
            ->add('Nom', TextType::class, [
                'label' => 'NOM',
            ])
            ->add('Prenom', TextType::class, [
                'label' => 'Prénom',
            ])
            ->add('Mail', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('Password', TextType::class, [
                'label' => 'Mot de passe',
                
            ])
          /*  ->add('Test_Password', TextType::class, [
                'label' => 'Confirmer le mot de passe',
            ])
           */
            ->add('Adresse',TextType::class, [
                'label' => 'Adresse',
            ])
            ->add('Profession', TextType::class, [
                'label' => 'Profession',
            ])
            ->add('UrlWeb', UrlType::class, [
                'label' => 'Url de votre site web',
                'required'=> false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Inscription::class,
        ]);
    }
}
