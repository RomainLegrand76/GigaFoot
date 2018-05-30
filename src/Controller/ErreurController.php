<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErreurController extends Controller
{
    /**
     * @Route("/erreur", name="erreur")
     */
    public function index()
    {
        return $this->render('erreur/index.html.twig', [
            'controller_name' => 'ErreurController',
        ]);
    }
}
