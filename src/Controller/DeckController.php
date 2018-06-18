<?php

namespace App\Controller;

use App\Entity\Countries;
use App\Entity\CourseOf;
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
   /*  $country = $this->getDoctrine()
           ->getRepository(CourseOf::class)
           ->findOneBy($date);

       $match = $this->getDoctrine()
           ->getRepository(CourseOf::class)
           ->findOneByIdJoinedToCategory('2018-06-16 12:00:00');

       var_dump($match);

       return $this->render('deck/index.html.twig');*/






        /*return $this->render('deck/index.html.twig', [
            'controller_name' => 'DeckController',
        ]);*/

    }



}
