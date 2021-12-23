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
        $img[0]="Facade\Façade1.jpeg";
        $img[1]="LogoEcole\logoecole.png";
        $img[2]="SalleMotricite\SalleMotricite1.jpg";
        $img[3]="SalleRestauration\Maternelle\cantinePetits2.jpg";
        $img[4]="SalleRestauration\Primaire\cantine1.jpg";
        $img[5]="Garderie\garderie4.jpg";
        $img[6]="CoursRecre\Maternelle\CoursMaternelle3.jpg";
        $img[7]="CoursRecre\Primaire\CoursPrimaire1.jpeg";
        $img[8]="Biblio\Biblio1.jpeg";

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
