<?php

namespace App\Controller\Back;

use App\Entity\Brand;
use App\Form\BrandType;
use App\Repository\BrandRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/back/marques')]
class BrandController extends AbstractController
{
    #[Route('/', name: 'app_back_brand_list', methods: ['GET'])]
    public function list(BrandRepository $brandRepository, Request $request): Response
    {
        // display 25 brands by page
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 25;
        $brands = $brandRepository->paginateBrands($pageNumber, $limit);
        $maxPageCount = ceil($brands->count() / $limit);
        

        return $this->render('back/brand/list.html.twig', [
            'brands' => $brands,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
        ]);
    }

    #[Route('/ajouter', name: 'app_back_brand_new', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $brand = new Brand();
        $form = $this->createForm(BrandType::class, $brand);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($brand);
            $entityManager->flush();

            return $this->redirectToRoute('app_back_brand_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/brand/new.html.twig', [
            'brand' => $brand,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_brand_show', methods: ['GET'])]
    public function show(Brand $brand): Response
    {
        return $this->render('back/brand/show.html.twig', [
            'brand' => $brand,
        ]);
    }

    #[Route('/{id<\d+>}/modifier', name: 'app_back_brand_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Brand $brand, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BrandType::class, $brand);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_back_brand_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/brand/edit.html.twig', [
            'brand' => $brand,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_brand_delete', methods: ['POST'])]
    public function delete(Request $request, Brand $brand, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$brand->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($brand);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_back_brand_list', [], Response::HTTP_SEE_OTHER);
    }
}
