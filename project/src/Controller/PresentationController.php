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
            "CoursRecre\Maternelle\CoursMaternelle1.jpg",
            "SalleRestauration\Maternelle\cantinePetits2.jpg",
            "SalleRestauration\Primaire\cantine1.jpg",
            "MobiliterReduite\mobilité.png",
            "SalleMotricite\SalleMotricite1.jpg"
        ];
        $reglement="reglement_interieur_de_lecole_sainte_marie_de_la_presentation.pdf";
        $projetEducatif="Projet_éducatif.pdf";
        $voletPastoral="MUST ADD WHEN RECEIVED";

        return $this->render('/presentation/presentation.html.twig', [
            'img' => $img,
            'reglement' => $reglement,
            'projetEducatif' => $projetEducatif,
            'voletPastoral' => $voletPastoral,
        ]);
    }
}
