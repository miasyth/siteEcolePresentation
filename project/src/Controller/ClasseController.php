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
        $moyens="#b1434a"; #cours moyens

        if($class=="TPS"){

            $className="tres petite section";
            $color = $maternelle;
            $img[0]="TPSBulteau\TPS_1.jpg";
            $img[1]="TPSBulteau\TPS_2.jpg";
            $img[2]="TPSBulteau\TPS_3.jpg";
            $img[3]="TPSBulteau\TPS_4.jpg";
            $img[4]="TPSBulteau\TPS_5.jpg";
            $img[5]="TPSBulteau\TPS_6.jpg";
            $img[6]="TPSBulteau\TPS_7.jpg";
            $listeProfs="Mme Bulteau";

        } else if ($class=="PS-MS"){

            $className="petite et moyenne section";
            $color = $maternelle;
            $img[0]="PSMSCandelier\PSMS_1.jpg";
            $img[1]="PSMSCandelier\PSMS_2.jpg";
            $img[2]="PSMSCandelier\PSMS_3.jpg";
            $img[3]="PSMSCandelier\PSMS_4.jpg";
            $img[4]="PSMSCandelier\PSMS_5.jpg";
            $img[5]="PSMSCandelier\PSMS_6.jpg";
            $listeProfs="Mmes Candelier, Guffroy et Delphine";

        } else if ($class=="MS"){

            $className="moyenne section";
            $color = $maternelle;
            $img[0]="MSMartinage\MS_1.jpg";
            $img[1]="MSMartinage\MS_2.jpg";
            $img[2]="MSMartinage\MS_3.jpg";
            $img[3]="MSMartinage\MS_4.jpg";
            $img[4]="MSMartinage\MS_5.jpg";
            $img[5]="MSMartinage\MS_6.jpg";
            $listeProfs="Mme Martinage et Melle Derieux";

        } else if ($class=="GS"){

            $className="grande section";            
            $color = $maternelle;
            $img[0]="GSBaudry\GS_1.jpg";
            $img[1]="GSBaudry\GS_2.jpg";
            $img[2]="GSBaudry\GS_3.jpg";
            $img[3]="GSBaudry\GS_4.jpg";
            $img[4]="GSBaudry\GS_5.jpg";
            $img[5]="GSBaudry\GS_6.jpg";
            $listeProfs="Mme Baudry";

        } else if ($class=="GS-CP"){

            $className="grande section et CP";
            $color = $preparatoire;
            $img[0]="GSCPCamier\GSCP_1.jpg";
            $img[1]="GSCPCamier\GSCP_2.jpg";
            $img[2]="GSCPCamier\GSCP_3.jpg";
            $img[3]="GSCPCamier\GSCP_4.jpg";
            $img[4]="GSCPCamier\GSCP_5.jpg";
            $img[5]="GSCPCamier\GSCP_6.jpg";
            $listeProfs="Mme Camier";

        } else if ($class=="CP"){

            $className="CP";
            $color = $preparatoire;
            $img[0]="CPCaillieriez\CP_1.jpg";
            $img[1]="CPCaillieriez\CP_2.jpg";
            $img[2]="CPCaillieriez\CP_3.jpg";
            $img[3]="CPCaillieriez\CP_4.jpg";
            $img[4]="CPCaillieriez\CP_5.jpg";
            $listeProfs="Mme Caillieriez";

        } else if ($class=="CE1"){

            $className="CE1";
            $color = $elementaire;
            $img[0]="CE1Dourlens\CE1_1.jpg";
            $img[1]="CE1Dourlens\CE1_2.jpg";
            $img[2]="CE1Dourlens\CE1_3.jpg";
            $img[3]="CE1Dourlens\CE1_4.jpg";
            $listeProfs="Mme Dourlens";

        } else if ($class=="CE12"){

            $className="CE1 et CE2";
            $color = $elementaire;
            $img[0]="CE1CE2Dartois\CE1CE2_1.jpg";
            $img[1]="CE1CE2Dartois\CE1CE2_2.jpg";
            $img[2]="CE1CE2Dartois\CE1CE2_3.jpg";
            $img[3]="CE1CE2Dartois\CE1CE2_4.jpg";
            $img[4]="CE1CE2Dartois\CE1CE2_5.jpg";
            $img[5]="CE1CE2Dartois\CE1CE2_6.jpg";
            $listeProfs="Mme Dartois";

        } else if ($class=="CE2"){

            $className="CE2";
            $color = $elementaire;
            $img[0]="CE2Tilloy\CE2_1.jpg";
            $img[1]="CE2Tilloy\CE2_2.jpg";
            $img[2]="CE2Tilloy\CE2_3.jpg";
            $img[3]="CE2Tilloy\CE2_4.jpg";
            $img[4]="CE2Tilloy\CE2_5.jpg";
            $img[5]="CE2Tilloy\CE2_6.jpg";
            $listeProfs="Mmes Tilloy et Desbuquois";

        } else if ($class=="CM1"){

            $className="CM1";
            $color = $moyens;
            $img[0]="CM1Bossuwe\CM1_1.jpg";
            $listeProfs="M Bossuwe";

        } else if ($class=="CM12"){

            $className="CM1 et CM2";
            $color = $moyens;
            $img[0]="CM1CM2Duhamel\CM1CM2_1.jpg";
            $img[1]="CM1CM2Duhamel\CM1CM2_2.jpg";
            $img[2]="CM1CM2Duhamel\CM1CM2_3.jpg";
            $img[3]="CM1CM2Duhamel\CM1CM2_4.jpg";
            $listeProfs="Mmes Dupont et Duhamel";

        } else if ($class=="CM2"){

            $className="CM2";
            $color = $moyens;
            $img[0]="CM2Cazer\CM2_1.jpg";
            $img[1]="CM2Cazer\CM2_2.jpg";
            $img[2]="CM2Cazer\CM2_3.jpg";
            $img[3]="CM2Cazer\CM2_4.jpg";
            $listeProfs="Mmes Cazer et Heil";

        } else {
            return $this->redirectToRoute('classes');
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