<?php

namespace App\Controller\Back;

use App\Entity\Beer;
use App\Form\BeerType;
use App\Repository\BeerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/back/bieres')]
class BeerController extends AbstractController
{
    #[Route('/', name: 'app_back_beer_list', methods: ['GET'])]
    public function list(BeerRepository $beerRepository, Request $request): Response
    {
        // display 25 beers by page
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 25;
        $beers = $beerRepository->paginateBeers($pageNumber, $limit);
        $maxPageCount = ceil($beers->count() / $limit);

        return $this->render('back/beer/list.html.twig', [
            'beers' => $beers,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
        ]);
    }

    #[Route('/ajouter', name: 'app_back_beer_new', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $beer = new Beer();
        $form = $this->createForm(BeerType::class, $beer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($beer);
            $entityManager->flush();

            return $this->redirectToRoute('app_back_beer_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/beer/new.html.twig', [
            'beer' => $beer,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_beer_show', methods: ['GET'])]
    public function show(Beer $beer): Response
    {
        return $this->render('back/beer/show.html.twig', [
            'beer' => $beer,
        ]);
    }

    #[Route('/{id<\d+>}/modifier', name: 'app_back_beer_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Beer $beer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BeerType::class, $beer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_back_beer_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/beer/edit.html.twig', [
            'beer' => $beer,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_beer_delete', methods: ['POST'])]
    public function delete(Request $request, Beer $beer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$beer->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($beer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_back_beer_list', [], Response::HTTP_SEE_OTHER);
    }
}
