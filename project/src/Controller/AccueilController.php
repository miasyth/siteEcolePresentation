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
            "SalleRestauration\Maternelle\cantinePetits2.jpg",
            "SalleRestauration\Primaire\cantine1.jpg",
            "Garderie\garderie4.jpg",
            "CoursRecre\Maternelle\CoursMaternelle3.jpg",
            "CoursRecre\Primaire\CoursPrimaire1.jpeg",
            "Biblio\Biblio1.jpeg"
        ];

        return $this->render('/accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'img' => $img,
        ]);
    }

    #[Route('/', name: 'accueilAuxiliary')]
    public function indexAux(): Response
    {
        return $this->index();
    }
}
