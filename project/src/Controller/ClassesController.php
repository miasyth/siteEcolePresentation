<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassesController extends AbstractController
{
    #[Route('/classes', name: 'classes')]
    public function index(): Response
    {
        $classes=[
            [
                'link'=>'TPS-PS',
                'htmlDesc'=>['TPS et PS','Mme Bulteau'],
                'illu'=>'TPSPSBulteau\TPSPS_illu.jpg'
            ],
            [
                'link'=>'PS-MS',
                'htmlDesc'=>['PS et MS','Mmes Candelier et Guffroy'],
                'illu'=>'PSMSCandelier\PSMS_illu.jpg'
            ],
            [
                'link'=>'MS',
                'htmlDesc'=>['MS','Mmes Martinage et Derieux'],
                'illu'=>'MSMartinage\MS_illu.jpg'
            ],
            [
                'link'=>'GS',
                'htmlDesc'=>['GS','Mme Baudry'],
                'illu'=>'GSBaudry\GS_illu.jpg'
            ],
            [
                'link'=>'GS-CP',
                'htmlDesc'=>['GS et CP','Mme Camier'],
                'illu'=>'GSCPCamier\GSCP_illu.jpg'
            ],
            [
                'link'=>'CP',
                'htmlDesc'=>['CP','Mme Caillieriez'],
                'illu'=>'CPCaillieriez\CP_illu.jpg'
            ],
            [
                'link'=>'CE1',
                'htmlDesc'=>['CE1','Mme Dourlens'],
                'illu'=>'CE1Dourlens\CE1_illu.jpg'
            ],
            [
                'link'=>'CE12',
                'htmlDesc'=>['CE1 et CE2','Mme Dartois'],
                'illu'=>'CE1CE2Dartois\CE1CE2_illu.jpg'
            ],
            [
                'link'=>'CE2',
                'htmlDesc'=>['CE2','Mmes Tilloy et Desbuquois'],
                'illu'=>'CE2Tilloy\CE2_illu.jpg'
            ],
            [
                'link'=>'CM1',
                'htmlDesc'=>['CM1','M Bossuwe'],
                'illu'=>'CM1Bossuwe\CM1_illu.jpg'
            ],
            [
                'link'=>'CM12',
                'htmlDesc'=>['CM1 et CM2','Mmes Dupont et Duhamel'],
                'illu'=>'CM1CM2Duhamel\CM1CM2_illu.jpg'
            ],
            [
                'link'=>'CM2',
                'htmlDesc'=>['CM2','Mmes Cazer et Heil'],
                'illu'=>'CM2Cazer\CM2_illu.jpg'
            ]
        ];

        return $this->render('\classes\classes.html.twig', [
            'classes' => $classes,
        ]);
    }
}
