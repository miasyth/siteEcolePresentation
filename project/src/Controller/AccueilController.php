<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function indexAux(): Response
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

        return $this->render('/accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'img' => $img,
        ]);
    }
}
