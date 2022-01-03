<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementsController extends AbstractController
{
    #[Route('/evenements', name: 'evenements')]
    public function index(): Response
    {
        $evenements=[
            [
                'link'=>'Carnaval',
                'title'=>'Carnaval',
                'illu'=>'Carnaval\Carnaval.jpg'
            ],
            [
                'link'=>'Noel',
                'title'=>'Noël',
                'illu'=>'Noël\marcheNoel.jpg'
            ],
            [
                'link'=>'Ceremonie',
                'title'=>'Cérémonie',
                'illu'=>'Ceremonie\priere.jpg'
            ],
            [
                'link'=>'PorteOuverte',
                'title'=>'Portes ouvertes de l\'établissement',
                'illu'=>'PorteOuverte\Evenement_Porte_Ouvertes_Presentation_Arras.jpg'
            ],
            [
                'link'=>'RencontreSportive',
                'title'=>'Rencontres sportives',
                'illu'=>'RencontreSportive\Handball.jpg'
            ],
            [
                'link'=>'SortiePedagogique',
                'title'=>'Sortie Pédagogique',
                'illu'=>'SortiePedagogique\sortiePedago.jpg'
            ]
        ];

        return $this->render('evenements/evenements.html.twig', [
            'evenements' => $evenements,
        ]);
    }
}
