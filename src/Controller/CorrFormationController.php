<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CorrFormationController extends AbstractController
{
    #[Route('/corr/formation', name: 'app_corr_formation')]
    public function index(): Response
    {
        return $this->render('corr_formation/index.html.twig', [
            'controller_name' => 'CorrFormationController',
        ]);
    }
}
