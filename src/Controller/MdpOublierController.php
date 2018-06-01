<?php

namespace App\Controller;

use App\Form\MdpOublierType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MdpOublierController extends Controller
{
    /**
     * @Route("/mdpoublier", name="mdp_oublier")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $formMdpPerdu = $this->createForm(MdpOublierType::class);

        $formMdpPerdu->handleRequest($request);

        if ($formMdpPerdu->isSubmitted() && $formMdpPerdu->isValid()){
            $mdpPerduFormData = $formMdpPerdu->getData();

            $message = (new \Swift_Message('motdepasseoublier'))
                ->setFrom($mdpPerduFormData['email'])
                ->setTo('gigafoot.pro@gmail.com')
                ->setBody(
                      " " . $mdpPerduFormData['email'] . "\n \n \n" . "L’equipe GigaFoot \n
-------------------------------------------------------------------------------------------------------------------------------------------------
Ce message électronique et ses fichiers attaches sont strictement confidentiels et peuvent contenir des éléments dont GigaFoot est propriétaires. Ils sont donc destinés à l'usage de leurs seuls destinataires. Si vous avez reçu ce message par erreur, merci de le retourner à son émetteur et de le détruire ainsi que toutes les pièces attachées. L'utilisation, la divulgation, la publication, la distribution, ou la reproduction non expressément autorisée de ce message et de ses pièces attachées sont interdites.
-------------------------------------------------------------------------------------------------------------------------------------------------",
                    'text/plain'
                )
            ;

            $mailer->send($message);

            return $this->redirectToRoute('mdp_oublier');


        }

        return $this->render('mdp_oublier/index.html.twig', ['mdp_perdu_form' => $formMdpPerdu, 'mdp_perdu_form' => $formMdpPerdu->createView(),]);
    }
}
