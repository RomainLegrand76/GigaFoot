<?php

namespace App\Controller;

use App\Entity\Countries;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeckController extends Controller
{
    /**
     * @Route("/deck", name="deck")
     */
  /*  public function index()
    {


        return $this->render('deck/index.html.twig', [
            'controller_name' => 'DeckController',
        ]);
    }

    /**
     * @Route("/deck/{id}", name="deck_show")
     */

    public function show()
    {
       $country = $this->getDoctrine()
            ->getRepository(Countries::class)
            ->findAll();


        //return new Response('Check out this great product: '.$country->getCouName()." ".$country->getCouFlag());

        // or render a template
        // in the template, print things with {{ product.name }}
        return $this->render('deck/index.html.twig', ['country' => $country]);
    }

//    public function findAllGreaterThanPrice(): array
//    {
//        $conn = $this->getEntityCounties()->getConnection();
//
//        $sql = "
//        SELECT * FROM Countries
//        ";
//        $country = $conn->prepare($sql);
//        $country->execute();
//        $country->findAll();
//
//        // returns an array of arrays (i.e. a raw data set)
//        return $this->render('deck/index.html.twig', ['country' => $country]);
//    }

}
