<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationController extends AbstractController
{
    #[Route('/presentation', name: 'presentation')]
    public function index(): Response
    {
        return $this->render('/autre_pages/presentation.html.twig', [
            'controller_name' => 'PresentationController',
        ]);
    }
}
