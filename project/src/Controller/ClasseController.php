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
        $color1="#40a4bc"; #maternelle
        $color2="#82b442"; #cours preparatoires
        $color3="#ea7d44"; #cours elementaire
        $color4="#b1434a"; #cours moyens

        if($class=="TPS"){

            $className="tres petite section";
            $color = $color1;
            $img1="TPBlultheau\BlultheauTP3.jpg";
            $img2="TPBlultheau\BlultheauTP5.jpg";
            $img3="TPBlultheau\BlultheauTP6.jpg";
            $listeProfs="Mme Blutheau";

        } else if ($class=="PS-MS"){

            $className="petite et moyenne section";
            $color = $color1;
            $img1="PSMSCandellier\PSCandellier2.jpg";
            $img2="PSMSCandellier\PSCandellier3.jpg";
            $img3="PSMSCandellier\PSCandellier5.jpg";
            $listeProfs="Mmes Candellier, Guffroy et Delphine";

        } else if ($class=="MS"){

            $className="moyenne section";
            $color = $color1;
            $img1="MSMartinage\Martinage2.jpg";
            $img2="MSMartinage\Martinage3.jpg";
            $img3="MSMartinage\Martinage5.jpg";
            $listeProfs="Mme Martinage et Melle Derieux";

        } else if ($class=="GS"){

            $className="grande section";            
            $color = $color1;
            $img1="GSBaudry\GSBaudry1.jpg";
            $img2="GSBaudry\GSBaudry3.jpg";
            $img3="GSBaudry\GSBaudry5.jpg";
            $listeProfs="Mme Baudry";

        } else if ($class=="CP_1"){

            $className="CP 1";
            $color = $color2;
            $img1="CPCaille\CPCaille1.jpeg";
            $img2="CPCaille\CPCaille4.jpeg";
            $img3="CPCaille\CPCaille5.jpeg";
            $listeProfs="Mme Camier";

        } else if ($class=="CP_2"){

            $className="CP 2";
            $color = $color2;
            $img1="CPCamier\CPCamier1.jpg";
            $img2="CPCamier\CPCamier2.jpg";
            $img3="CPCamier\CPCamier5.jpg";
            $listeProfs="Mme Caillierez";

        } else if ($class=="CE1"){

            $className="CE1";
            $color = $color3;
            $img1="CE1Dourlens\Ce1Dourlens1.jpg";
            $img2="CE1Dourlens\Ce1Dourlens2.jpg";
            $img3="CE1Dourlens\Ce1Dourlens4.jpg";
            $listeProfs="Mme Dourlens";

        } else if ($class=="CE12"){

            $className="CE1 et CE2";
            $color = $color3;
            $img1="CE1CE2Dartois\Ce1Dartois1.jpg";
            $img2="CE1CE2Dartois\Ce1Dartois2.jpg";
            $img3="CE1CE2Dartois\Ce1Dartois6.jpg";
            $listeProfs="Mme Dartois";

        } else if ($class=="CE2"){

            $className="CE2";
            $color = $color3;
            $img1="CE2Tilloy\Ce2Tilloy1.jpg";
            $img2="CE2Tilloy\Ce2Tilloy2.jpg";
            $img3="CE2Tilloy\Ce2Tilloy3.jpg";
            $listeProfs="Mmes Tilloy et Desbusquois";

        } else if ($class=="CM1"){

            $className="CM1";
            $color = $color4;
            $img1="CM1Bosswue\CM1Bossuwe.jpg";
            $img2="CM1Bosswue\CM1Bossuwe1.jpg";
            $img3="CM1Bosswue\CM1Bossuwe2.jpg";
            $listeProfs="M Bosswue";

        } else if ($class=="CM12"){

            $className="CM1 et CM2";
            $color = $color4;
            $img1="CM1CM2DuhaDup\CM12DuhaDup1.jpg";
            $img2="CM1CM2DuhaDup\CM12DuhaDup2.jpg";
            $img3="CM1CM2DuhaDup\CM12DuhaDup5.jpg";
            $listeProfs="Mmes Dupont et Duhamel";

        } else if ($class=="CM2"){

            $className="CM2";
            $color = $color4;
            $img1="CM2Cazer\CM2HeilCazer1.jpg";
            $img2="CM2Cazer\CM2HeilCazer2.jpg";
            $img3="CM2Cazer\CM2HeilCazer3.jpg";
            $listeProfs="Mmes Cazer et Heil";

        } else {
            return $this->redirectToRoute('classes');
        }

        return $this->render('classe/classe.html.twig', [
            'class' => $class,
            'className' => $className,
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'color' => $color,
            'listeProfs' => $listeProfs
        ]);
    }
}