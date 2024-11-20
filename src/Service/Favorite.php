<?php 

namespace App\Service;

use App\Entity\Beer;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class Favorite {

    // une propriété pour éviter de récupérer le user dans chaque méthode
    private User $user;
    

    public function __construct(private Security $security, private EntityManagerInterface $em)
    {
        /** @var \App\Entity\User $user */
        $this->user = $this->security->getUser();
    }
    
    public function list()
    {
        
        return $this->user->getBeerFavorite();
    }

    public function add(Beer $beer)
    {
        
        
        // on utilise doctrine on lie des objets entre eux, pas besoin de se soucier de clé étrangère de tables pivot ect
        $this->user->addBeerFavorite($beer);
        
        
        $this->em->flush();
        
    }

    public function remove(Beer $beer)
    {
        
        $beer->removeUser($this->user);
        
        $this->em->flush();
    }

    public function empty()
    {
        $this->user->getBeerFavorite()->clear();
       

        $this->em->flush();
    }
}