<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifierEvenementController extends AbstractController
{
    #[Route('/modifier_evenement', name: 'modifier_evenement')]
    public function index(): Response
    {
        return $this->render('modifier_evenement/ModifierEvenement.html.twig', [
            'controller_name' => 'ModifierEvenementController',
        ]);
    }
}
