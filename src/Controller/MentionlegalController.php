<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MentionlegalController extends Controller
{
    /**
     * @Route("/mentionlegal", name="mentionlegal")
     */
    public function index()
    {
        return $this->render('mentionlegal/index.html.twig', [
            'controller_name' => 'MentionlegalController',
        ]);
    }
}
