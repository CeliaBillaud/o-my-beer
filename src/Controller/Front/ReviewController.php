<?php

namespace App\Controller\Front;

use App\Entity\Beer;
use App\Entity\Review;
use App\Entity\User;
use App\Form\ReviewType;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;


#[Route('/bieres')]
class ReviewController extends AbstractController
{
    #[Route('/{beer<\d+>}/avis/{review<\d+>}/modifier', name: 'app_review_update', methods: ['GET', "POST"])]
    public function update(Beer $beer, Review $review, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Use of a Security voter to check if the actual user is the one who created the review. If not, the user will be redirected.
        $this->denyAccessUnlessGranted('REVIEW_EDIT', $review);
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $review->setUser($this->getUser());
            $beer = $review->getBeer();

            $allNotes = 0;
            foreach ($beer->getReviews() as $review) {
                $allNotes += $review->getRating();
                }
            // after getting all reviews of the beer, we calculate the average rating
            $rating = $allNotes / (count($beer->getReviews()));
            $beer->setRating(round($rating, 1));
            $entityManager->flush();
            
            $this->addFlash('secondary', 'Commentaire modifié avec succès');
            return $this->redirectToRoute('app_beer_read', ["id" => $beer->getId()], Response::HTTP_SEE_OTHER);
        } 
        return $this->render('front/beer/update_review.html.twig', [
            'formReview' => $form,
            'beer' => $beer,
            ]);    
    }

    #[Route('/{beer<\d+>}/avis/{review<\d+>}/supprimer', name: 'app_review_delete', methods: ['GET', "POST"])]
    public function delete(Beer $beer, Review $review, EntityManagerInterface $entityManager): Response
    {
        // Use of a Security voter to check if the actual user is the one who created the review. If not, the user will be redirected.
        $this->denyAccessUnlessGranted('REVIEW_DELETE', $review);
        $entityManager->remove($review);
        $entityManager->flush();
        $this->addFlash('secondary', 'Commentaire supprimé');
        return $this->redirectToRoute('app_beer_read', ["id" => $beer->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{beer<\d+>}/avis/{review<\d+>}/signaler', name: 'app_review_report', methods: ['GET', "POST"])]
    public function report(Beer $beer, Review $review, EntityManagerInterface $entityManager): Response
    {
        if($this->isGranted('ROLE_USER')){
            $reportCount = $review->getReportCount();
            //add 1 to reportCount
            $review->setReportCount($reportCount + 1);
        
            $entityManager->flush();
            $this->addFlash('secondary', 'Commentaire signalé');
            return $this->redirectToRoute('app_beer_read', ["id" => $beer->getId()], Response::HTTP_SEE_OTHER);
        }
    }
}
