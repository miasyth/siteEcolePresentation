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
                'illu'=>'Carnaval\Carnaval'
            ],
            [
                'link'=>'Noel',
                'title'=>'Noël',
                'illu'=>'Noël\marcheNoel'
            ],
            [
                'link'=>'Ceremonie',
                'title'=>'Cérémonie',
                'illu'=>'Ceremonie\priere'
            ],
            [
                'link'=>'PorteOuverte',
                'title'=>'Portes ouvertes de l\'établissement',
                'illu'=>'PorteOuverte\Evenement_Porte_Ouvertes_Presentation_Arras'
            ],
            [
                'link'=>'RencontreSportive',
                'title'=>'Rencontres sportives',
                'illu'=>'RencontreSportive\Handball'
            ],
            [
                'link'=>'SortiePedagogique',
                'title'=>'Sortie Pédagogique',
                'illu'=>'SortiePedagogique\sortiePedago'
            ]
        ];

        return $this->render('evenements/evenements.html.twig', [
            'evenements' => $evenements,
        ]);
    }
}
