<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifierEvenementController extends AbstractController
{
    #[Route('/modifier/evenement', name: 'modifier_evenement')]
    public function index(): Response
    {
        return $this->render('modifier_evenement/index.html.twig', [
            'controller_name' => 'ModifierEvenementController',
        ]);
    }
}
