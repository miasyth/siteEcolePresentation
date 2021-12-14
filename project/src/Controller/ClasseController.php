<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/TPS', name: 'tres_petite_section')]
    public function index(): Response
    {
        return $this->render('classe/TPS.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe', name: 'classe')]
    public function TPS(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/PS-MS', name: 'petite_et_moyenne_section')]
    public function PSMS(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/MS', name: 'petite_et_moyenne_section')]
    public function MS(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/GS', name: 'petite_et_moyenne_section')]
    public function GS(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CP_1', name: 'petite_et_moyenne_section')]
    public function CP_1(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CP_2', name: 'petite_et_moyenne_section')]
    public function CP_2(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CE1', name: 'petite_et_moyenne_section')]
    public function CE1(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CE12', name: 'petite_et_moyenne_section')]
    public function CE12(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CE2', name: 'petite_et_moyenne_section')]
    public function CE2(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CM1', name: 'petite_et_moyenne_section')]
    public function CM1(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CM12', name: 'petite_et_moyenne_section')]
    public function CM12(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/CM2', name: 'petite_et_moyenne_section')]
    public function CM2(): Response
    {
        return $this->render('classe/classe.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }
}