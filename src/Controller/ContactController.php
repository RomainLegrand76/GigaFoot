<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $contactFormData = $form->getData();

            $message = (new \Swift_Message($contactFormData['subject']))
                ->setFrom($contactFormData['email'])
                ->setTo('gigafoot.pro@gmail.com')
                ->setBody(
                    $contactFormData['message'] . " " . $contactFormData['email'] . "\n \n \n" . "L’equipe GigaFoot \n
-------------------------------------------------------------------------------------------------------------------------------------------------
Ce message électronique et ses fichiers attaches sont strictement confidentiels et peuvent contenir des éléments dont GigaFoot est propriétaires. Ils sont donc destinés à l'usage de leurs seuls destinataires. Si vous avez reçu ce message par erreur, merci de le retourner à son émetteur et de le détruire ainsi que toutes les pièces attachées. L'utilisation, la divulgation, la publication, la distribution, ou la reproduction non expressément autorisée de ce message et de ses pièces attachées sont interdites.
-------------------------------------------------------------------------------------------------------------------------------------------------",
                    'text/plain'
                )
            ;

            $mailer->send($message);

            return $this->redirectToRoute('contact');


        }

        return $this->render('contact/index.html.twig', ['our_form' => $form, 'our_form' => $form->createView(),]);
    }
}
