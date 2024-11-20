<?php

namespace App\Controller\Front;

use App\Entity\Beer;
use App\Repository\TypeRepository;
use App\Service\Favorite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/mes-favoris')]
class FavoriteController extends AbstractController
{

    public function __construct(private Favorite $favorite)
    {

    }

    #[Route('/', name: 'app_favorite_list')]
    public function list(): Response
    {

        return $this->render('front/beer/beer_favorite.html.twig', [
            'beerList' => $this->favorite->list(),
        ]);
    }

    #[Route('/vider', name: 'app_favorite_empty', methods: ['GET'])]
    public function empty(): Response
    {

        $this->favorite->empty();
        $this->addFlash('secondary', 'La liste a été supprimé avec succès');

        // rediriger l'utilisateur sur la page /favorites

        return $this->redirectToRoute('app_favorite_list');

    }

    // #[Route('/{id<\d+>}/ajouter', name: 'app_favorite_create', methods: ["GET", "POST"])]
    // public function create(Request $request, Beer $beer): Response
    // {
        
    //     $this->favorite->add($beer);
    //     $this->addFlash('secondary', 'La bière ' . $beer->getName() . ' a été ajoutée avec succès');

    //     // redirect user to the last page
        
    //     $referer = $request->headers->get("referer");
    //     return $this->redirect($referer);

    // }

    // #[Route('/{id<\d+>}/supprimer', name: 'app_favorite_delete', methods: ['GET'])]
    // public function delete(Beer $beer , Request $request): Response
    // {

    //     $this->favorite->remove($beer);
    //     $this->addFlash('secondary', 'La bière ' . $beer->getName() . ' a été supprimée de vos favoris avec succès');
        
    //     // redirect user to the last page
        
    //     $referer = $request->headers->get("referer");
    //     return $this->redirect($referer);

    // }

}
