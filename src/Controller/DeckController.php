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
    public function index($date)
    {

        $country = $this->getDoctrine()
            ->getRepository(CourseOf::class)
            ->findOneBy($date);




        /*return $this->render('deck/index.html.twig', [
            'controller_name' => 'DeckController',
        ]);*/
    }

  /*  public function show()
    {
       $country = $this->getDoctrine()
            ->getRepository(Countries::class)
            ->findAll();

        return $this->render('deck/index.html.twig', ['country' => $country]);
    }*/

}
