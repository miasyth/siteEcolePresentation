<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/classe/{classe}', name: 'details classe')]
    public function index(string $classe): Response
    {
        if($classe=="TPS"){
            return $this->render('classe/TPS.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }
        
        if($classe=="PS-MS"){
            return $this->render('classe/PS-MS.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="MS"){
            return $this->render('classe/MS.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="GS"){
            return $this->render('classe/GS.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CP_1"){
            return $this->render('classe/CP_1.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CP_2"){
            return $this->render('classe/CP_2.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CE1"){
            return $this->render('classe/CE1.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CE12"){
            return $this->render('classe/CE12.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CE2"){
            return $this->render('classe/CE2.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CM1"){
            return $this->render('classe/CM1.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CM12"){
            return $this->render('classe/CM12.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }


        if($classe=="CM2"){
            return $this->render('classe/CM2.html.twig', [
                'controller_name' => 'ClasseController',
            ]);
        }
    }
}