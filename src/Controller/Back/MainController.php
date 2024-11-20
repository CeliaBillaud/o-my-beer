<?php

namespace App\Controller\Back;

use App\Repository\BeerRepository;
use App\Repository\BrandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/back', name: 'app_back_homepage')]
    public function home(): Response
    {
       
        return $this->render('back/main/home.html.twig', [
            
        ]);
    }

    // TODO gérer la barre de recherche
}
