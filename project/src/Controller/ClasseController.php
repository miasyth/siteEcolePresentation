<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/classe/{class}', name: 'details classe')]
    public function index(string $class): Response
    {
        if($class=="TPS"){
            $className="classe de tres petite section";
        } else if ($class=="PS-MS"){
            $className="classe de petite et moyenne section";
        } else if ($class=="MS"){
            $className="classe de moyenne section";
        } else if ($class=="GS"){
            $className="classe de grande section";            
        } else if ($class=="CP_1"){
            $className="classe de CP 1";
        } else if ($class=="CP_2"){
            $className="classe de CP 2";
        } else if ($class=="CE1"){
            $className="classe de CE1";
        } else if ($class=="CE12"){
            $className="classe de CE1 et CE2";
        } else if ($class=="CE2"){
            $className="classe de CE2";
        } else if ($class=="CM1"){
            $className="classe de CM1";
        } else if ($class=="CM12"){
            $className="classe de CM1 et CM2";
        } else if ($class=="CM2"){
            $className="classe de CM2";
        } else {
            return $this->redirectToRoute('classes');
        }

        return $this->render('classe/classe.html.twig', [
            'class' => $class,
            'className' => $className,
        ]);
    }
}