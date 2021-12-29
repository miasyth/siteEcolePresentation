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
        $imgEquipe='equipePeda.jpeg';
        $rangs=[
            "Mme CUVELLIER Pauline (AESH), Mme DAUSSE Emelina AESH, Mme DOURLENS CE1, Mme BAUDRY GS, Mme CAMIER GS/CP, Mme CANDELIER PS/MS, Mme BULTEAU TPS/PS, 
            Mr BOSSUWE CM, Mme HEIL CM2, Mme Marie Christine (secrétaire).",
            "Mme JOLIBOIS Camille ( ASEM), Mme MERCIER  Isabelle (ASEM), Melle GUFFROY  PS-MS, Mme MARTINAGE MS , Mme ALISSE Chef d’établissement, 
            Mme DARTOIS CE1/CE2, Mme TILLOY CE2 , Mme DUHAMEL CM1/CM2 , Mme CAILLIERIEZ CP, Mme BUISIERE Delphine (ASEM)."
        ];

        return $this->render('equipe_pedagogique/equipe_pedagogique.html.twig', [
            'imgEquipe' => $imgEquipe,
            'rangs' => $rangs
        ]);
    }
}
