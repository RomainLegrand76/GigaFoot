<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopequipeController extends Controller
{
    /**
     * @Route("/topequipe", name="topequipe")
     */
    public function index()
    {
        return $this->render('topequipe/index.html.twig', [
            'controller_name' => 'TopequipeController',
        ]);
    }
}
