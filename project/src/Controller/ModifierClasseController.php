<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifierClasseController extends AbstractController
{
    #[Route('/modifier_classe', name: 'modifier_classe')]
    public function index(): Response
    {
        return $this->render('modifier_classe/ModifierClasse.html.twig', [
            'controller_name' => 'ModifierClasseController',
        ]);
    }
}
