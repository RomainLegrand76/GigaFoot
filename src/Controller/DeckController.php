<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeckController extends Controller
{
    /**
     * @Route("/deck", name="deck")
     */
    public function index()
    {
        return $this->render('deck/index.html.twig', [
            'controller_name' => 'DeckController',
        ]);
    }

}
