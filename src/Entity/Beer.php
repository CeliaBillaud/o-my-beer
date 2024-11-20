<?php

namespace App\Entity;

use App\Repository\BeerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BeerRepository::class)]
class Beer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $style = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hop = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $yeast = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $malts = null;

    #[Assert\Range(
        min: 5,
        max: 120,
        notInRangeMessage: "L'indice IBU doit être compris entre 5 et 120.",
    )]
    #[ORM\Column(nullable: true)]
    private ?int $ibu = null;

    #[Assert\Range(
        min: 1,
        max: 20,
        notInRangeMessage: "Le degré d'alcool doit être compris entre 1 et 20.",
    )]
    #[Assert\NotBlank]
    #[ORM\Column]
    private ?float $alcohol = null;

    #[Assert\Range(
        min: 5,
        max: 25,
        notInRangeMessage: "La sucrosité doit être comprise entre 5 et 25.",
    )]
    #[ORM\Column(nullable: true)]
    private ?float $blg = null;

    #[Assert\Range(
        min: 1,
        max: 5,
        notInRangeMessage: "La note doit être comprise entre 1 et 5.",
    )]
    #[ORM\Column(nullable: true)]
    private ?float $rating = null;

    #[Assert\NotBlank]
    #[ORM\ManyToOne(inversedBy: 'beers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Brand $brand = null;

    #[Assert\NotBlank]
    #[ORM\ManyToOne(inversedBy: 'beers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Type $type = null;

    #[ORM\OneToMany(targetEntity: Review::class, mappedBy: 'beer', orphanRemoval: true)]
    private Collection $reviews;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'beer_favorite')]
    private Collection $users;

    #[Assert\Url]
    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): static
    {
        $this->style = $style;

        return $this;
    }

    public function getHop(): ?string
    {
        return $this->hop;
    }

    public function setHop(?string $hop): static
    {
        $this->hop = $hop;

        return $this;
    }

    public function getYeast(): ?string
    {
        return $this->yeast;
    }

    public function setYeast(?string $yeast): static
    {
        $this->yeast = $yeast;

        return $this;
    }

    public function getMalts(): ?string
    {
        return $this->malts;
    }

    public function setMalts(?string $malts): static
    {
        $this->malts = $malts;

        return $this;
    }

    public function getIbu(): ?int
    {
        return $this->ibu;
    }

    public function setIbu(?int $ibu): static
    {
        $this->ibu = $ibu;

        return $this;
    }

    public function getAlcohol(): ?float
    {
        return $this->alcohol;
    }

    public function setAlcohol(float $alcohol): static
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    public function getBlg(): ?float
    {
        return $this->blg;
    }

    public function setBlg(?float $blg): static
    {
        $this->blg = $blg;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(?float $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): static
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews->add($review);
            $review->setBeer($this);
        }

        return $this;
    }

    public function removeReview(Review $review): static
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getBeer() === $this) {
                $review->setBeer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addBeerFavorite($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            $user->removeBeerFavorite($this);
        }

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
}
