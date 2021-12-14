<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/classe/TPS', name: 'tres_petite_section')]
    public function TPS(): Response
    {
        return $this->render('classe/TPS.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/PS-MS', name: 'petite_et_moyenne_section')]
    public function PSMS(): Response
    {
        return $this->render('classe/PS-MS.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/MS', name: 'moyenne_section')]
    public function MS(): Response
    {
        return $this->render('classe/MS.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/GS', name: 'grande_section')]
    public function GS(): Response
    {
        return $this->render('classe/GS.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CP_1', name: 'cours_preparatoire1')]
    public function CP_1(): Response
    {
        return $this->render('classe/CP_1.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CP_2', name: 'cours_preparatoire2')]
    public function CP_2(): Response
    {
        return $this->render('classe/CP_2.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CE1', name: 'cours_elementaire_1')]
    public function CE1(): Response
    {
        return $this->render('classe/CE1.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CE12', name: 'cours_elementaire_1_et_2')]
    public function CE12(): Response
    {
        return $this->render('classe/CE12.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CE2', name: 'cours_elementaire_2')]
    public function CE2(): Response
    {
        return $this->render('classe/CE2.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CM1', name: 'cours_moyens_1')]
    public function CM1(): Response
    {
        return $this->render('classe/CM1.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CM12', name: 'cours_moyens_1_et_2')]
    public function CM12(): Response
    {
        return $this->render('classe/CM12.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/CM2', name: 'cours_moyens_2')]
    public function CM2(): Response
    {
        return $this->render('classe/CM2.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }
}