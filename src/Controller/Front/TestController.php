<?php

namespace App\Controller\Front;

use App\Entity\Beer;
use App\Service\Test;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/a-tester')]
class TestController extends AbstractController
{

    public function __construct(private Test $test)
    {

    }

    #[Route('/', name: 'app_test_list')]
    public function list(): Response
    {
        return $this->render('front/beer/beer_test.html.twig', [
            'beerList' => $this->test->list(),
        ]);
    }

    #[Route('/vider', name: 'app_test_empty', methods: ['GET'])]
    public function empty(): Response
    {
        $this->test->empty();
        $this->addFlash('secondary', 'La liste a été supprimée avec succès');

        // redirect user to his test list
        return $this->redirectToRoute('app_test_list');
    }

    // #[Route('/{id<\d+>}/ajouter', name: 'app_test_create', methods: ["GET", "POST"])]
    // public function create(Request $request, Beer $beer): Response
    // {
    //     $this->test->add($beer);
    //     $this->addFlash('secondary', 'La bière ' . $beer->getName() . ' a été ajoutée avec succès');

    //     // redirect user to the last page
    //     $referer = $request->headers->get("referer");
    //     return $this->redirect($referer);
    // }

    // #[Route('/{id<\d+>}/supprimer', name: 'app_test_delete', methods: ['GET'])]
    // public function delete(Beer $beer , Request $request): Response
    // {
    //     $this->test->remove($beer);
    //     $this->addFlash('secondary', 'La bière ' . $beer->getName() . ' a été supprimée de vos favoris avec succès');
        
    //     // redirect user to the last page
    //     $referer = $request->headers->get("referer");
    //     return $this->redirect($referer);
    // }
    
}
