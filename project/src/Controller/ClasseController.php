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
        $maternelle="#40a4bc"; #maternelle
        $preparatoire="#82b442"; #cours preparatoire
        $elementaire="#ea7d44"; #cours elementaire
        $moyen="#b1434a"; #cours moyen

        if($class=="TPS-PS"){

            $className="TPS et PS";
            $level = "maternelle";
            $img=[
                "TPSPSBulteau\TPSPS_1.jpg",
                "TPSPSBulteau\TPSPS_2.jpg",
                "TPSPSBulteau\TPSPS_3.jpg",
                "TPSPSBulteau\TPSPS_4.jpg",
                "TPSPSBulteau\TPSPS_5.jpg",
                "TPSPSBulteau\TPSPS_6.jpg",
                "TPSPSBulteau\TPSPS_7.jpg"
            ];
            $listeProfs="Mme Bulteau";

        } else if ($class=="PS-MS"){

            $className="PS et MS";
            $level = "maternelle";
            $img=[
                "PSMSCandelier\PSMS_1.jpg",
                "PSMSCandelier\PSMS_2.jpg",
                "PSMSCandelier\PSMS_3.jpg",
                "PSMSCandelier\PSMS_4.jpg",
                "PSMSCandelier\PSMS_5.jpg",
                "PSMSCandelier\PSMS_6.jpg"
            ];
            $listeProfs="Mmes Candelier et Guffroy et Mme Delphine (ASEM)";

        } else if ($class=="MS"){

            $className="MS";
            $level = "maternelle";
            $img=[
                "MSMartinage\MS_1.jpg",
                "MSMartinage\MS_2.jpg",
                "MSMartinage\MS_3.jpg",
                "MSMartinage\MS_4.jpg",
                "MSMartinage\MS_5.jpg",
                "MSMartinage\MS_6.jpg"
            ];
            $listeProfs="Mmes Martinage et Derieux";

        } else if ($class=="GS"){

            $className="GS";            
            $level = "maternelle";
            $img=[
                "GSBaudry\GS_1.jpg",
                "GSBaudry\GS_2.jpg",
                "GSBaudry\GS_3.jpg",
                "GSBaudry\GS_4.jpg",
                "GSBaudry\GS_5.jpg",
                "GSBaudry\GS_6.jpg"
            ];
            $listeProfs="Mme Baudry";

        } else if ($class=="GS-CP"){

            $className="GS et CP";
            $level = "preparatoire";
            $img=[
                "GSCPCamier\GSCP_1.jpg",
                "GSCPCamier\GSCP_2.jpg",
                "GSCPCamier\GSCP_3.jpg",
                "GSCPCamier\GSCP_4.jpg",
                "GSCPCamier\GSCP_5.jpg",
                "GSCPCamier\GSCP_6.jpg"
            ];
            $listeProfs="Mme Camier";

        } else if ($class=="CP"){

            $className="CP";
            $level = "preparatoire";
            $img=[
                "CPCaillieriez\CP_1.jpg",
                "CPCaillieriez\CP_2.jpg",
                "CPCaillieriez\CP_3.jpg",
                "CPCaillieriez\CP_4.jpg",
                "CPCaillieriez\CP_5.jpg"
            ];
            $listeProfs="Mme Caillieriez";

        } else if ($class=="CE1"){

            $className="CE1";
            $level = "elementaire";
            $img=[
                "CE1Dourlens\CE1_1.jpg",
                "CE1Dourlens\CE1_2.jpg",
                "CE1Dourlens\CE1_3.jpg",
                "CE1Dourlens\CE1_4.jpg"
            ];
            $listeProfs="Mme Dourlens";

        } else if ($class=="CE12"){

            $className="CE1 et CE2";
            $level = "elementaire";
            $img=[
                "CE1CE2Dartois\CE1CE2_1.jpg",
                "CE1CE2Dartois\CE1CE2_2.jpg",
                "CE1CE2Dartois\CE1CE2_3.jpg",
                "CE1CE2Dartois\CE1CE2_4.jpg",
                "CE1CE2Dartois\CE1CE2_5.jpg",
                "CE1CE2Dartois\CE1CE2_6.jpg"
            ];
            $listeProfs="Mme Dartois";

        } else if ($class=="CE2"){

            $className="CE2";
            $level = "elementaire";
            $img=[
                "CE2Tilloy\CE2_1.jpg",
                "CE2Tilloy\CE2_2.jpg",
                "CE2Tilloy\CE2_3.jpg",
                "CE2Tilloy\CE2_4.jpg",
                "CE2Tilloy\CE2_5.jpg",
                "CE2Tilloy\CE2_6.jpg"
            ];
            $listeProfs="Mmes Tilloy et Desbuquois";

        } else if ($class=="CM1"){

            $className="CM1";
            $level = "moyen";
            $img=[
                "CM1Bossuwe\CM1_1.jpg",
                "CM1Bossuwe\CM1_2.jpg",
                "CM1Bossuwe\CM1_3.jpg",
                "CM1Bossuwe\CM1_4.jpg",
            ];
            $listeProfs="M Bossuwe";

        } else if ($class=="CM12"){

            $className="CM1 et CM2";
            $level = "moyen";
            $img=[
                "CM1CM2Duhamel\CM1CM2_1.jpg",
                "CM1CM2Duhamel\CM1CM2_2.jpg",
                "CM1CM2Duhamel\CM1CM2_3.jpg",
                "CM1CM2Duhamel\CM1CM2_4.jpg"
            ];
            $listeProfs="Mmes Dupont et Duhamel";

        } else if ($class=="CM2"){

            $className="CM2";
            $level = "moyen";
            $img=[
                "CM2Cazer\CM2_1.jpg",
                "CM2Cazer\CM2_2.jpg",
                "CM2Cazer\CM2_3.jpg",
                "CM2Cazer\CM2_4.jpg"
            ];
            $listeProfs="Mmes Cazer et Heil";

        } else {
            return $this->redirectToRoute('classes');
        }

        if($level=="maternelle"){
            $color=$maternelle;
        } else if ($level=="preparatoire"){
            $color=$preparatoire;
        } else if ($level=="elementaire"){
            $color=$elementaire;
        } else {
            $color=$moyen;
        }

        return $this->render('classe/classe.html.twig', [
            'class' => $class,
            'className' => $className,
            'img' => $img,
            'color' => $color,
            'listeProfs' => $listeProfs
        ]);
    }
}