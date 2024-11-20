<?php

namespace App\Controller\Front;

use App\Data\TypesPresentations;
use App\Entity\Beer;
use App\Entity\Type;
use App\Entity\Brand;
use App\Entity\Review;
use DateTimeImmutable;
use App\Form\ReviewType;
use App\Repository\BeerRepository;
use App\Repository\TypeRepository;
use App\Repository\BrandRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/bieres')]
class BeerController extends AbstractController
{
    #[Route('/', name: 'app_beer_list')]
    public function list(BeerRepository $beerRepository, TypeRepository $typeRepository, BrandRepository $brandRepository, Request $request): Response
    {
        // display 8 beers by page
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 8;
        $beers = $beerRepository->paginateBeers($pageNumber, $limit);
        $maxPageCount = ceil($beers->count() / $limit);
        
        // get all types and brands for the filters
        $types = $typeRepository->findAll();
        $brands = $brandRepository->findAll();
        return $this->render('front/beer/list.html.twig', [
            'beerList' => $beers,
            'typeList' => $types,
            'brandList' => $brands,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
        ]);
    }

    #[Route('/type/{id<\d+>}', name: 'app_beer_type')]
    public function beerType(Type $type, TypeRepository $typeRepository, BrandRepository $brandRepository, BeerRepository $beerRepository, Request $request, TypesPresentations $typesPresentations): Response
    {
        // display 8 beers of the type by page with a custom request
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 8;
        $beers = $beerRepository->paginateBeersByTypeOrBrand($pageNumber, $limit, $type->getId(), "type");
        $maxPageCount = ceil($beers->count() / $limit);
        // get all types and brands for the filters
        $types = $typeRepository->findAll();
        $brands = $brandRepository->findAll();

        return $this->render('front/beer/list.html.twig', [
            'beerList' => $beers,
            'typeList' => $types,
            'brandList' => $brands,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
            'type' => $type,
            // get the array with descriptions of all types
            'typesPresentations' => $typesPresentations->getTypesPresentations(),
        ]);
    }

    #[Route('/marque/{id<\d+>}', name: 'app_beer_brand')]
    public function beerBrand(Brand $brand, TypeRepository $typeRepository, BrandRepository $brandRepository, BeerRepository $beerRepository, Request $request): Response
    {
        // display 8 beers of the type by page with a custom request
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 8;
        $beers = $beerRepository->paginateBeersByTypeOrBrand($pageNumber, $limit, $brand->getId(), "brand");
        $maxPageCount = ceil($beers->count() / $limit);
        // get all types and brands for the filters
        $types = $typeRepository->findAll();
        $brands = $brandRepository->findAll();
        return $this->render('front/beer/list.html.twig', [
            'beerList' => $beers,
            'typeList' => $types,
            'brandList' => $brands,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
            'id' => $brand->getId(),
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_beer_read', methods: ["GET", "POST"])]
    public function read(Beer $beer, Request $request, EntityManagerInterface $entityManager) : Response
    {
        $review = new Review();
        $review->setBeer($beer);
        // Send beer id to the form
        $beerId = $beer->getId();
        // Send datetime automatically
        $review->setCreatedAt(New DateTimeImmutable());
        // Send user id to the form 
        $review->setUser($this->getUser());
        
        //review form
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $review->getBeer()->addReview($review);
            $entityManager->persist($review);
            $entityManager->flush();
            $this->addFlash('secondary', 'Commentaire ajouté');
            return $this->redirectToRoute('app_beer_read', ["id" => $beerId], Response::HTTP_SEE_OTHER);
        }


        // find one beer
        return $this->render('front/beer/read.html.twig', [
            'beer' => $beer,
            'formReview' => $form,
        ]);
    }



}
