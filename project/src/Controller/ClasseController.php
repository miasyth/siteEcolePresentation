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
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="PS-MS"){
            $className="classe de petite et moyenne section";
            $img1="PSMSCandellier\PSCandellier2.jpg";
            $img2="PSMSCandellier\PSCandellier3.jpg";
            $img3="PSMSCandellier\PSCandellier5.jpg";
        } else if ($class=="MS"){
            $className="classe de moyenne section";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="GS"){
            $className="classe de grande section";            
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CP_1"){
            $className="classe de CP 1";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CP_2"){
            $className="classe de CP 2";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CE1"){
            $className="classe de CE1";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CE12"){
            $className="classe de CE1 et CE2";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CE2"){
            $className="classe de CE2";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CM1"){
            $className="classe de CM1";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CM12"){
            $className="classe de CM1 et CM2";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else if ($class=="CM2"){
            $className="classe de CM2";
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
        } else {
            return $this->redirectToRoute('classes');
        }

        return $this->render('classe/classe.html.twig', [
            'class' => $class,
            'className' => $className,
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
        ]);
    }
}