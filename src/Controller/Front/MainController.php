<?php

namespace App\Controller\Front;

use App\Form\ContactType;
use App\Repository\BeerRepository;
use App\Repository\TypeRepository;
use App\Repository\BrandRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function home(BeerRepository $beerRepository, BrandRepository $brandRepository): Response
    {
        // Get the 4 best rated beers with custom function findFourBestRated (DQL -> return objects of the first four elements)
        $beers = $beerRepository->findFourBestRated();
        // Get 4 random brands for home page with custom function findFourRandom (SQL -> return arrays of random elements)
        $brands = $brandRepository->findFourRandom();
        return $this->render('front/main/home.html.twig', [
            "beerList" => $beers,
            "brandList" => $brands,
        ]);
    }

    #[Route('/recherche', name: 'app_homepage_search', methods: ['GET'])]
    public function search(BeerRepository $beerRepository, Request $request, TypeRepository $typeRepository, BrandRepository $brandRepository, int $limit = 8): Response
    {
        
        // display 6 beers by page
        $search = $request->query->get('recherche');
        $pageNumber = $request->query->getInt('page', 1);
        $beers = $beerRepository->paginateBeersBySearch($pageNumber, $limit, $search);
        $maxPageCount = ceil($beers->count() / $limit);
        
        // get all brands for the filters
        $brands = $brandRepository->findAll();
        
        // Fetch only the necessary types
        $types = [];
        foreach ($beers as $beer) {
            if(!in_array($beer->getType(), $types)) {
                $types[] = $beer->getType();
            }
        }

        // display a message if no beer was found
        if (empty($beers)) {
            throw $this->createNotFoundException('Aucune bière n\'a été trouvée pour cette recherche.');
        }
        return $this->render('front/beer/list.html.twig', [
            "beerList" => $beers,
            'typeList' => $types,
            'brandList' => $brands,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
            'road' => 'homepage_search'
        ]);
    }

    #[Route('/mentions-legales', name: 'app_legal_notice')]
    public function legalNotice(): Response
    {
        
        return $this->render('front/main/legal_notice.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $email = (new TemplatedEmail())
                ->from('omybeer.dev@gmail.com')
                ->to('omybeer.dev@gmail.com')
                ->subject('Demande de contact')

                // path of the Twig template to render
                ->htmlTemplate('email/contact.html.twig')

                // pass variables (name => value) to the template
                ->context([
                    'contactFormData' => $contactFormData,
                ]);
            $mailer->send($email);

            $this->addFlash('secondary', 'Votre message a bien été envoyé. Merci !');

            return $this->redirectToRoute('app_homepage');
        } else {
            return $this->render('front/main/contact.html.twig', [
                'form' => $form,
            ]);
        }
        
    }

    #[Route('/a-propos', name: 'app_about')]
    public function about(): Response
    {    
        return $this->render('front/main/about.html.twig');
    }
}
