<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EvenementController extends AbstractController
{
    #[Route('/evenement/{event}', name: 'details evenement')]
    public function index(string $event): Response
    {

        $titre_event="#0f0f0f"; #couleur événement

        if($event=="Carnaval"){

            $nomEvenement="Carnaval";
            $color = $titre_event;
            $img=[
                "Carnaval\Carnaval.jpg",
                "Carnaval\Carnaval1.jpg",
                "Carnaval\Carnaval2.jpg",
                "Carnaval\Carnaval3.jpg",
                "Carnaval\Carnaval4.jpg"
            ];

        } else if ($event=="Noel"){

            $nomEvenement="Noël";
            $color = $titre_event;
            $img=[
                "Noël/decoNoel.jpg",
                "Noël/Evenement_Marche_noel_Presentation_Arras.jpg",
                "Noël/facadeNoel.jpg",
                "Noël/marcheNoel.jpg",
                "Noël/noelCollecte.jpg",
                "Noël/saintNicolas.jpg",
                "Noël/sapinPetits.jpg"
            ];

        } else if ($event=="Ceremonie"){

            $nomEvenement="Ceremonie";
            $color = $titre_event;
            $img=[
                "Ceremonie\messePremiereCommunion.jpg",
                "Ceremonie\priere.jpg"
            ];

        } else if ($event=="PorteOuverte"){

            $nomEvenement="Portes Ouvertes";            
            $color = $titre_event;
            $img=[
                "PorteOuverte\Evenement_Porte_Ouvertes_Presentation_Arras.jpg",
                "PorteOuverte/rentréeClasse.jpg"
            ];

        } else if ($event=="RencontreSportive"){

            $nomEvenement="Rencontres Sportives";
            $color = $titre_event;
            $img=[
                "RencontreSportive\Handball.jpg"
            ];

        } else if ($event=="SortiePedagogique"){

            $nomEvenement="Sorties Pedagogiques";
            $color = $titre_event;
            $img=[
                "SortiePedagogique\sortiePedago.jpg",
                "SortiePedagogique\sortiePedagoStTeres.jpg"
            ];

        } else {
            return $this->redirectToRoute('evenements');
        }

        return $this->render('evenement/evenement.html.twig', [
            'event' => $event,
            'nomEvenement' => $nomEvenement,
            'img' => $img,
            'color' => $color,
        ]);
    }
}