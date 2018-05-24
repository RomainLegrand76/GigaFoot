<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReglesController extends Controller
{
    /**
     * @Route("/regles", name="regles")
     */
    public function index()
    {
        return $this->render('regles/index.html.twig', [
            'controller_name' => 'ReglesController',
        ]);
    }
}
