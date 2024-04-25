<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $strashipCount=457;
        $myShip=[
            'name'=> 'USS LeafyCruiser (NCC-001)',
            'class'=> 'Garden',
            'captain'=> 'Jean Luc Pickles',
            'status'=> 'under construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships'=>$strashipCount,
            'myShip'=>$myShip,
            ]);
    }
}
