<?php

namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BrandRepository::class)]
class Brand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[Assert\Url]
    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;
    
    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $founded_in = null;

    #[ORM\OneToMany(targetEntity: Beer::class, mappedBy: 'brand', orphanRemoval: true)]
    private Collection $beers;


    public function __construct()
    {
        $this->beers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }
    public function getFoundedIn(): ?\DateTimeImmutable
    {
        return $this->founded_in;
    }

    public function setFoundedIn(?\DateTimeImmutable $founded_in): static
    {
        $this->founded_in = $founded_in;

        return $this;
    }


    /**
     * @return Collection<int, Beer>
     */
    public function getBeers(): Collection
    {
        return $this->beers;
    }

    public function addBeer(Beer $beer): static
    {
        if (!$this->beers->contains($beer)) {
            $this->beers->add($beer);
            $beer->setBrand($this);
        }

        return $this;
    }

    public function removeBeer(Beer $beer): static
    {
        if ($this->beers->removeElement($beer)) {
            // set the owning side to null (unless already changed)
            if ($beer->getBrand() === $this) {
                $beer->setBrand(null);
            }
        }

        return $this;
    }
}
