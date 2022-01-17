<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutEvenementController extends AbstractController
{
    #[Route('/ajout_evenement', name: 'ajout_evenement')]
    public function index(): Response
    {
        return $this->render('ajout_evenement/AjoutEvenement.html.twig', [
            'controller_name' => 'AjoutEvenementController',
        ]);
    }
}
