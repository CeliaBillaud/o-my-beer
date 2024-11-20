<?php

namespace App\Security\Voter;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class AccessReviewVoter extends Voter
{
    public const EDIT = 'REVIEW_EDIT';
    //
    public const DELETE = 'REVIEW_DELETE';
    //

    public function __construct(
        private Security $security,
    ) {
    }

    protected function supports(string $attribute, mixed $review): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::EDIT, self::DELETE])

            // subject here is review
            && $review instanceof \App\Entity\Review;
    }

    protected function voteOnAttribute(string $attribute, mixed $review, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::EDIT:
                if ($review->getUser() === $user) {
                    return true;
                }
                break;
            case self::DELETE:
                if ($this->security->isGranted('ROLE_ADMIN') || $review->getUser() === $user) {
                    return true;
                }
                break;
        }
        return false;
    }
}
