<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InscriptionController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */

    public function formulaire(Request $requete)
    {
        $inscription = new Users();

        $formulaire = $this -> createFormBuilder($inscription)
            ->add('use_pseudo', TextType::class)
            ->add('use_firstname',TextType::class)
            ->add('use_lastname',TextType::class)
            ->add('use_password',PasswordType::class)
            ->add('use_mail',EmailType::class)
            ->add('envoyer',SubmitType::class, array('label' => 'Valider'))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid())
        {
            $inscription = $formulaire->getData();

            return $this->redirectToRoute('connexion');
        }

        return $this->render('inscription/index.html.twig',
            array(
                'inscription' => $formulaire->createView()
            )
        );
    }
}