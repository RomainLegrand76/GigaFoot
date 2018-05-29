<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class Contact1Controller extends Controller
{
    /**
     * @Route("/contact1", name="contact1")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $contactFormData = $form->getData();

            $message = (new \Swift_Message('You Got Mail!'))
                ->setFrom($contactFormData['email'])
                ->setTo('gigafoot.pro@gmail.com')
                ->setBody(
                    $contactFormData['message'],
                    'text/plain'
                )
            ;

            $mailer->send($message);

            return $this->redirectToRoute('contact1');

        }

        return $this->render('contact1/index.html.twig', ['our_form' => $form, 'our_form' => $form->createView(),]);
    }
}
