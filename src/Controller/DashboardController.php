<?php

namespace App\Controller;

use App\Repository\BandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
class DashboardController extends AbstractController
{
    #[Route(name: 'dashboard', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('home.html.twig');
    }
}
