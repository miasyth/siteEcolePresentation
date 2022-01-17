<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutClasseController extends AbstractController
{
    #[Route('/ajout_classe', name: 'ajout_classe')]
    public function index(): Response
    {
        return $this->render('ajout_classe/AjoutClasse.html.twig', [
            'controller_name' => 'AjoutClasseController',
        ]);
    }
}
