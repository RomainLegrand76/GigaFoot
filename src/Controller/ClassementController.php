<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassementController extends Controller
{
    /**
     * @Route("/classement", name="classement")
     */
    public function index()
    {
        return $this->render('classement/index.html.twig', [
            'controller_name' => 'ClassementController',
        ]);
    }
}
