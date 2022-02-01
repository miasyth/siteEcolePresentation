<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationController extends AbstractController
{
    #[Route('/presentation', name: 'presentation')]
    public function index(): Response
    {
        $img=[
            "CoursRecre\Primaire\CoursPrimaire2.jpg",
            "SalleRestauration\Maternelle\cantinePetits2.jpg",
            "SalleRestauration\Primaire\cantine1.jpg",
            "MobiliterReduite\mobilité.png",
            "SalleMotricite\SalleMotricite1.jpg"
        ];

        $pres=[
            "La vie à l'école Sainte Marie de La Présentation.",
            "Une école où il fait bon d'apprendre.",
            "Un enseignement de qualité, des grandes classes.",
            "Deux cours maternelle et Primaire.",
            "Un accueil dès 2 ans, un accès handicapé.",
            "La semaine sur 4 jours, un accueil de 7h30 à 19h.",
            "Une ambiance familiale...",
            "Le respect de chacun."
        ];

        $desc=[
            "L'établissement Sainte Marie de la Présentation se trouve à 5 minutes de la gare à pied.",
            "Nous accueillons les enfants de 2 à 11 ans, allant de la toute petite section (TPS) au cours moyens 2ème année (CM2), domiciliés à Arras et à ses alentours."
        ];

        $PDFs=[
            ["Notre réglement intérieur","reglement_interieur_de_lecole_sainte_marie_de_la_presentation.pdf"],
            ["Le Projet éducatif","Projet_éducatif.pdf"],
            ["Volet Pastoral","voletpastoral.pdf"]
        ];

        return $this->render('/presentation/presentation.html.twig', [
            'img' => $img,
            'pres' => $pres,
            'desc' => $desc,
            'PDFs' => $PDFs
        ]);
    }
}
