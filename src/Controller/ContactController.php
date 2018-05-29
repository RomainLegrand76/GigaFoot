<?php

namespace App\Controller;


use App\Entity\Contact;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */

    public function formulaire(Request $requete)
    {
        $contact = new Contact();

        $formulaire = $this->createFormBuilder($contact)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('mail', EmailType::class)
            ->add('corp', TextareaType::class)
            ->add('envoyer', SubmitType::class, array('label' => 'Envoyer'))
            ->getForm();

        $formulaire->handleRequest($requete);



        return $this->render('/contact/index.html.twig',
            array(
                'contact' => $formulaire->createView(),
            ));
    }






}

