<?php

namespace App\Controller\Api;

use App\Entity\Beer;
use App\Service\Test;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/test')]
class TestController extends AbstractController
{
    public function __construct(private Test $test)
    {

    }

    #[Route('/{id<\d+>}/ajouter', name: 'app_api_test_create')]
    public function create(Request $request, Beer $beer): JsonResponse
    {
        //todo rajouter isGranted(USER)
        $this->test->add($beer);
        // $this->addFlash('secondary', 'La bière ' . $beer->getName() . ' a été ajoutée avec succès');

        return $this->json([
        ], Response::HTTP_OK,);
    }

    #[Route('/{id<\d+>}/supprimer', name: 'app_api_test_delete', methods: ['GET'])]
    public function delete(Beer $beer , Request $request): JsonResponse
    {

        $this->test->remove($beer);
        // $this->addFlash('secondary', 'La bière ' . $beer->getName() . ' a été supprimée de vos bières à tester avec succès');
        
        return $this->json([], Response::HTTP_OK,);
    }

    
}