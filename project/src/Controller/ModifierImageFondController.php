<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifierImageFondController extends AbstractController
{
    #[Route('/modifier_image_fond', name: 'modifier_image_fond')]
    public function index(): Response
    {
        return $this->render('modifier_image_fond/ModifierFond.html.twig', [
            'controller_name' => 'ModifierImageFondController',
        ]);
    }
}
