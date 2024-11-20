<?php 

namespace App\EventListener;

use App\Entity\Brand;
use Symfony\Component\String\Slugger\SluggerInterface;

class BrandListener {

    public function __construct(private SluggerInterface $slugger)
    {

    }

    public function slugifyName(Brand $brand)
    {
        // set column slug with namebrand when we creating new brand
        $brand->setSlug(strtolower($this->slugger->slug($brand->getName())));
    }
}