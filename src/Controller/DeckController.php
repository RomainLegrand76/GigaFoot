<?php

namespace App\Controller;

use App\Entity\Countries;
use App\Entity\courseOf;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM;
use Doctrine\ORM\Query\Expr;

class DeckController extends Controller
{
    /**
     * @Route("/deck", name="deck")
     */
    public function index()
    {

        $country = $this->getDoctrine()
            ->getRepository(Countries::class)
            ->findAll();




        return $this->render('deck/index.html.twig', ['country' => $country]);

    }

  /*  public function show()
    {
       $country = $this->getDoctrine()
            ->getRepository(Countries::class)
            ->findAll();

        return $this->render('deck/index.html.twig', ['country' => $country]);
    }*/

}
