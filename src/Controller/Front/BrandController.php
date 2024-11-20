<?php

namespace App\Controller\Front;

use App\Data\TypesPresentations;
use App\Repository\BeerRepository;
use App\Repository\BrandRepository;
use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/marques')]
class BrandController extends AbstractController
{
    #[Route('/', name: 'app_brand_list')]
    public function list(BrandRepository $brandRepository, Request $request ): Response
    {
        // display 8 brands by page
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 8;
        $brands = $brandRepository->paginateBrands($pageNumber, $limit);
        $maxPageCount = ceil($brands->count() / $limit);

        return $this->render('front/brand/list.html.twig', [
            'brandList' => $brands,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
        ]);
    }

    #[Route('/{slug}', name: 'app_brand_read', methods: ['GET'])]
    public function read(string $slug, BrandRepository $brandRepository, BeerRepository $beerRepository, Request $request): Response
    {
        // search brand by slug
        $brand = $brandRepository->findOneBy(['slug' => $slug]); 
        // pagination
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 8;
        $beers = $beerRepository->paginateBeersByTypeOrBrand($pageNumber, $limit, $brand->getId(), "brand");
        $maxPageCount = ceil($beers->count() / $limit);
        
        // Fetch only the necessary types
        // call to a createQuery custom for found all types by brand
        $types = $beerRepository->findBeerTypesByBrand($brand->getId());
        
        return $this->render('front/brand/read.html.twig', [
            'beerList' => $beers,
            'typeList' => $types,
            'brand' => $brand,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount, 
        ]);
    }

    #[Route('/type/{typeId<\d+>}/marque/{brandId<\d+>}', name: 'app_brand_type_brand')]
    // #[ParamConverter('produit', options: ['mapping' => ['id' => 'produit_id']])]
    public function beerTypeAndBrand(BeerRepository $beerRepository, TypesPresentations $typesPresentations, int $brandId, $typeId, TypeRepository $typeRepository, BrandRepository $brandRepository, Request $request): Response
    {
        $brand = $brandRepository->findOneBy(['id' => $brandId]);
        $type = $typeRepository->findOneBy(['id' => $typeId]);
    
        // display 8 beers of the type by page with a custom request
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 8;
        $beers = $beerRepository->paginateBeersByTypeAndBrand($pageNumber, $limit, $typeId, $brandId, "type", "brand");
        $maxPageCount = ceil($beers->count() / $limit);
        
        // Fetch only the necessary types
        $brandBeers = $brand->getBeers();
        $types = [];
        foreach ($brandBeers as $beer) {
            if(!in_array($beer->getType(), $types)) {
                $types[] = $beer->getType();
            }
        }

        $brands = $brandRepository->findAll();
        return $this->render('front/brand/read.html.twig', [
            'beerList' => $beers,
            'typeList' => $types,
            'brandList' => $brands,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
            'type' => $type,
            'brand' => $brand,
            'typesPresentations' => $typesPresentations->getTypesPresentations(),
        ]);
    }
}
