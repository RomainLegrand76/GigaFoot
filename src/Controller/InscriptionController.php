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
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class InscriptionController extends Controller
{

    /**
     * @Route("/inscription", name="inscription")
     */

    public function formulaire(Request $requete)
    {

        function generateRandomString($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $inscription = new Users();

        $inscription->setUseToken(generateRandomString(255));
        $inscription->setUseRole(0);

        $formulaire = $this -> createFormBuilder($inscription)
            ->add('use_pseudo', TextType::class, array('label' => 'Pseudo'))
            ->add('use_firstname',TextType::class, array('label' => 'Prénom'))
            ->add('use_lastname',TextType::class, array('label' => 'Nom'))
            ->add('use_password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Confirmation mot de passe'),
            ))
            ->add('use_mail', RepeatedType::class, array(
                'type' => EmailType::class,
                'first_options'  => array('label' => 'Mail'),
                'second_options' => array('label' => 'Confirmation du mail'),))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid())
        {
            $inscription = $formulaire->getData();

            $inscription->setUsePassword(password_hash($inscription->getUsePassword(), PASSWORD_DEFAULT));



            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();

            return $this->redirectToRoute('connexion');
        }

        return $this->render('inscription/index.html.twig',
            array(
                'inscription' => $formulaire->createView()
            )
        );
    }
}