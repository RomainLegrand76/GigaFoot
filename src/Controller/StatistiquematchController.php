<?php

namespace App\Controller;

use App\Entity\Stats;
use App\Form\StatistiqueMatchType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class StatistiquematchController extends AbstractController
{
    /**
     * @Route("/statistiquematch", name="statistiquematch")
     */
    public function index(Request $request)
    {
        $stats = new StatistiqueMatchType();

        $form = $this->createForm(StatistiqueMatchType::class);

        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()){

            $stats = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($stats);
            $em->flush();

        }

        return $this->render('statistiquematch/index.html.twig', [
            'our_form' => $form,
            'our_form' => $form->createView()
        ]);
    }
}
