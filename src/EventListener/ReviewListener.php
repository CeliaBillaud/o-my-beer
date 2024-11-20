<?php 

namespace App\EventListener;

use App\Entity\Review;
use App\Repository\ReviewRepository;

class ReviewListener {

    
    public function __construct(private ReviewRepository $reviewRepository)
    {
        
    }

    public function createRating(Review $review)
    {
        $beer = $review->getBeer();

        $allNotes = 0;
        foreach ($beer->getReviews() as $review) {
            $allNotes += $review->getRating();
        }

        // after getting all reviews of the beer, we calculate the average rating
        if (count($beer->getReviews()) >= 1){
            $rating = $allNotes / (count($beer->getReviews()));
            $beer->setRating(round($rating, 1));
        }
    }


}

