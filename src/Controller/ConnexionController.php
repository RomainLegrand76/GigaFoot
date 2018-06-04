<?php

namespace App\Controller;


use App\Entity\Users;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ConnexionController extends Controller
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function index(Request $requete)
    {
        $connexion = new Users();

        $formulaire = $this -> createFormBuilder($connexion)
            ->add('use_pseudo', array('label' => 'Pseudo'))
            ->add('use_password',PasswordType::class, array('label' => 'Mot de passe'))
            ->add('Connexion', SubmitType::class)
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid())
        {
            $connexion = $formulaire->getData();

            $qb = $this->getDoctrine()
                ->getRepository(Users::class)
                ->findOneBy(['use_pseudo' => $connexion->getUsePseudo()]);

            if (is_null($qb)){
               echo 'Pseudo ou Mot de passe invalide';
            }
            else{
                if(password_verify($connexion->getUsePassword(), $qb->getUsePassword())){
                    return $this->redirectToRoute('deck');
                }
                else{
                    echo 'Pseudo ou Mot de passe invalide';
                }
            }




        }

        return $this->render('connexion/index.html.twig',
            array(
                'connexion' => $formulaire->createView()
            )
        );
    }
}
