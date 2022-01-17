<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionCompteController extends AbstractController
{
    #[Route('/gestion_compte', name: 'gestion_compte')]
    public function index(): Response
    {
        return $this->render('gestion_compte/GestionCompte.html.twig', [
            'controller_name' => 'GestionCompteController',
        ]);
    }
}
