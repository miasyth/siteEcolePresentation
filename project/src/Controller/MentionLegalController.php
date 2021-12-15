<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentionLegalController extends AbstractController
{
    #[Route('/mentionlegal', name: 'mention_legal')]
    public function index(): Response
    {
        return $this->render('mention_legal/mention.html.twig', [
            'controller_name' => 'MentionLegalController',
        ]);
    }
}
