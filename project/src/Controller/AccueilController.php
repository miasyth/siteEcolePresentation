<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function index(): Response
    {
        $img=[
            "Facade\Façade1.jpeg",
            "LogoEcole\logoecole.png",
            "SalleMotricite\SalleMotricite1.jpg",
            "Classes\TPSPSBulteau\TPSPS_7.jpg",
            "SalleRestauration\Primaire\cantine1.jpg",
            "Garderie\garderie4.jpg",
            "CoursRecre\Maternelle\CoursMaternelle3.jpg",
            "CoursRecre\Primaire\CoursPrimaire1.jpeg",
            "CoursRecre\Primaire\CoursPrimaire5.jpg",
            "EntreEcoleCP\Facebook.jpg",
            "Biblio\Biblio1.jpeg"
        ];

        $horaires=[
            ["Ouverture","7h30 à 19h"],
            ["Garderie","7h30 à 8h","16h30 à 19h"],
            ["Etude","16h45 à 17h45"],
            ["Restauration sur place","12h à 13h45"]
        ];

        $phones=[
            "03 21 51 44 76"
        ];

        $mails=[
            "lapresentation@orange.fr",
            "marielapresentation@orange.fr"
        ];

        return $this->render('/accueil/index.html.twig', [
            'img' => $img,
            'horaires' => $horaires,
            'phones' => $phones,
            'mails' => $mails
        ]);
    }

    #[Route('/', name: 'accueil_aux')]
    public function indexAux(): Response
    {
        return $this->index();
    }
}
