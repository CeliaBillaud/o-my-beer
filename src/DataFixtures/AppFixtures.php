<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Beer;
use App\Entity\Type;
use App\Entity\User;
use App\Entity\Brand;
use App\Entity\Review;
use App\Service\Unsplash;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class AppFixtures extends Fixture
{

    public function __construct(private Unsplash $unsplash)
    {
        
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $faker->seed(27);
        $faker->addProvider(new AppProvider());
        $faker->addProvider(new BeerProvider());
        
        //----BRANDS----
        $brands = $faker->getBrands();
        $brandObjectList = [];
        $brandsLogo = $faker->getBrandsLogos();

        foreach ($brands as $name => $brand)
        {
            //create new DateTimeImmutable Object to change the beer's in Y-01-01
            $foundedIn = new DateTimeImmutable($brand['founded'] . '-01-01');

            $newBrand = new Brand();
                $newBrand
                    ->setName($name)
                    ->setDescription($brand['description'])
                    ->setImage($brandsLogo[$name])
                    ->setCountry($brand['country'])
                    ->setFoundedIn($foundedIn);
            $manager->persist($newBrand);
            //adding the $newBrand object created in the db in an array to reuse them for creating beers objects
            $brandObjectList[] = $newBrand;
        }

        //----TYPES----
        $types = $faker->getTypes();
        $typeObjectList = [];
        foreach ($types as $type)
        {
            $newType = new Type();
                $newType
                    ->setName($type);
            $manager->persist($newType);
            //adding the $newBrand object created in the db in an array to reuse them for creating beers objects
            $typeObjectList[] = $newType;
        }

        //----BEERS----
        $beers = $faker->getBeers();
        $beerObjectList = [];

        $images = [];

        foreach ($this->unsplash->getBeerImages() as $imgBeer){
            if (!in_array($imgBeer["urls"]["small"], $images)) {
                $imgSmall = $imgBeer["urls"]["small"];
                $imgFm = str_replace("fm=jpg", "fm=webp", $imgSmall);
                // $img = str_replace("w=400", "h=390", $imgFm);
                $images[] = $imgFm;

            } else {
                continue;
            }
        }
        
        
        foreach ($beers as $name => $beer)
        {
            $newBeer = new Beer();
            $newBeer
                ->setName($name)
                ->setStyle($beer['style'])
                ->setImage($faker->randomElement($images))
                ->setHop($beer['hop'])
                ->setYeast($beer['yeast'])
                ->setMalts($beer['malts'])
                ->setIbu($beer['ibu'])
                ->setAlcohol($beer['alcohol'])
                ->setBlg($beer['blg']);
                // ->setRating($faker->randomFloat(1, 1, 5));
                
                //setBrand expects an Object, we loop through every brandObject and compare if the beer brand name = beer.name
                foreach($brandObjectList as $brandObject) {
                    if ($beer['brand'] == $brandObject->getName()){
                        $newBeer->setBrand($brandObject);
                    } 
                }

                foreach($typeObjectList as $typeObject) {
                    if ($beer['type'] == $typeObject->getName()){
                        $newBeer->setType($typeObject);
                    } 
                }

            $manager->persist($newBeer);
            $beerObjectList[] = $newBeer;
        }

        //----USERS----
        $admin = new User();
        $admin
            ->setEmail("admin@gmail.com")
            ->setUsername("admin")
            ->setPassword(password_hash('admin', PASSWORD_DEFAULT))
            ->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);

        $user = new User();
        $user
        
            ->setEmail("user@gmail.com")
            ->setUsername("user")
            ->setPassword(password_hash('user', PASSWORD_DEFAULT))
            ->setRoles(["ROLE_USER"]);
        $manager->persist($user);

        //----REVIEWS----
        for ($i=0; $i < 200 ; $i++) { 
                    
            $review = new Review();
            $reviewedBeer = $faker->randomElement($beerObjectList);

            $review
            ->setContent($faker->paragraph())
            ->setRating($faker->numberBetween(1,5))
            ->setCreatedAt(DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-30 days')))
            ->setBeer($reviewedBeer)
            ->setUser($user);

            //link the review to the beer and starts the ReviewListener to calculate the average rating
            $reviewedBeer->addReview($review);
    
            $manager->persist($review);
        }

        $manager->flush();
    }

}
