<?php

namespace App\Controller\Back;

use App\Entity\Beer;
use App\Entity\Review;
use App\Repository\ReviewRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/back/avis')]
class ReviewController extends AbstractController
{
    #[Route('/', name: 'app_back_review_list')]
    public function list(Request $request, ReviewRepository $reviewRepository): Response
    {
        // display 25 reviews by page
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 25;
        $reviews = $reviewRepository->paginateReviews($pageNumber, $limit);
        $maxPageCount = ceil($reviews->count() / $limit);

        //get reported reviews ordered by reportCount

        // $reviews = $reviewRepository->findReportedReviews();
        
        return $this->render('back/review/list.html.twig', [
            'reviews' => $reviews,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_review_show', methods: ['GET'])]
    public function show(Review $review): Response
    {
        return $this->render('back/review/show.html.twig', [
            'review' => $review,
        ]);
    }

    #[Route('/{id<\d+>}/supprimer', name: 'app_back_review_delete', methods: ['GET', "POST"])]
    public function delete(Review $review, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($review);
        $entityManager->flush();
        $this->addFlash('secondary', 'Commentaire supprimé');
        return $this->redirectToRoute('app_back_review_list', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id<\d+>}/reset', name: 'app_review_reset', methods: ['GET', "POST"])]
    public function report(Review $review, EntityManagerInterface $entityManager): Response
    {
            //set report count to 0
            $review->setReportCount(0);
        
            $entityManager->flush();
            $this->addFlash('secondary', 'Signalement remis à zéro');
            return $this->redirectToRoute('app_back_review_list', [], Response::HTTP_SEE_OTHER);

    }
}
