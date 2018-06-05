<?php

namespace App\Controller;

use App\Entity\Countries;
use App\Entity\CourseOf;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeckController extends Controller
{
    /**
     * @Route("/deck", name="deck")
     */
    public function index()
    {

      /*  $country = $this->getDoctrine()
            ->getRepository(CourseOf::class)
            ->findOneBy($date);*/

        $match = $this->getDoctrine()
            ->getRepository(CourseOf::class)
            ->findOneByIdJoinedToCategory('2018-06-16 12:00:00');

        var_dump($match);

        return $this->render('deck/index.html.twig');






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
