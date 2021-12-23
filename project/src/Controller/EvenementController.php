<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    #[Route('/evenement/{class}', name: 'details evenement')]
    public function index(string $class): Response
    {

        $titre_event="#0f0f0f"; #couleur événement

        if($class=="Carnaval"){

            $nomEvenement="Carnaval";
            $color = $titre_event;
            $img[0]="Carnaval\Carnaval.jpg";
            $img[1]="Carnaval\Carnaval1.jpg";
            $img[2]="Carnaval\Carnaval2.jpg";
            $img[3]="Carnaval\Carnaval3.jpg";
            $img[4]="Carnaval\Carnaval4.jpg";

        } else if ($class=="Noël"){

            $nomEvenement="Noël";
            $color = $titre_event;
            $img[0]="Noël\decoNoel.jpg";
            $img[1]="Noël\Evenement_Marche_noel_Presentation_Arras.jpg";
            $img[2]="Noël\facadeNoel.jpg";
            $img[3]="Noël\marcheNoel.jpg";
            $img[4]="Noël\noelCollecte.jpg";
            $img[5]="Noël\saintNicolas.jpg";
            $img[5]="Noël\sapinPetits.jpg";

        } else if ($class=="Ceremonies"){

            $nomEvenement="Ceremonie";
            $color = $titre_event;
            $img[0]="Ceremonie\messePremiereCommunion.jpg";
            $img[1]="Ceremonie\priere.jpg";

        } else if ($class=="PorteOuverte"){

            $nomEvenement="Portes Ouvertes";            
            $color = $titre_event;
            $img[0]="PorteOuverte\Evenement_Porte_Ouvertes_Presentation_Arras.jpg";
            $img[1]="PorteOuverte\rentréeClasse.jpg";

        } else if ($class=="RencontreSportive"){

            $nomEvenement="Rencontres Sportives";
            $color = $titre_event;
            $img[0]="RencontreSportive\Handball.jpg";

        } else if ($class=="SortiePedagogique"){

            $nomEvenement="Sorties Pedagogiques";
            $color = $titre_event;
            $img[0]="SortiePedagogique\sortiePedago.jpg";
            $img[1]="SortiePedagogique\sortiePedagoStTeres.jpg";

        } else {
            return $this->redirectToRoute('evenements');
        }

        return $this->render('evenement/evenement.html.twig', [
            'class' => $class,
            'nomEvenement' => $nomEvenement,
            'img' => $img,
            'color' => $color,
        ]);
    }
}