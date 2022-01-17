<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifierContenuController extends AbstractController
{
    #[Route('/modifier_contenu', name: 'modifier_contenu')]
    public function index(): Response
    {
        return $this->render('modifier_contenu/ModifierContenu.html.twig', [
            'controller_name' => 'ModifierContenuController',
        ]);
    }
}
