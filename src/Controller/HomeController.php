<?php

namespace App\Controller;

use App\Repository\CorrformationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(CorrformationRepository $corrformationRepository): Response
    {
        $formations = $corrformationRepository->findAll();

        return $this->render('home/index.html.twig', [
            'formations' => $formations,
        ]);
    }
}
