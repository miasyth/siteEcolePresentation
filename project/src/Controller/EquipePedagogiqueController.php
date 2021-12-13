<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipePedagogiqueController extends AbstractController
{
    #[Route('/equipe_pedagogique', name: 'equipe_pedagogique')]
    public function index(): Response
    {
        return $this->render('equipe_pedagogique/equipe_pedagogique.html.twig', [
            'controller_name' => 'EquipePedagogiqueController',
        ]);
    }
}
