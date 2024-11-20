<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(
    fields: ['email'],
    message: 'Email déjà existant',
)]
#[UniqueEntity(
    fields: ['username'],
    message: 'Nom d\'utilisateur déjà existant',
)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255, unique: true)]
    private ?string $email = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 100, unique: true)]
    private ?string $username = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[Assert\NotBlank]
    #[ORM\OneToMany(targetEntity: Review::class, mappedBy: 'user', orphanRemoval: true)]
    private Collection $reviews;

    #[ORM\JoinTable(name: 'user_beer_favorite')]
    #[ORM\ManyToMany(targetEntity: Beer::class, inversedBy: 'users')]
    private Collection $beer_favorite;

    #[ORM\JoinTable(name: 'user_beer_test')]
    #[ORM\ManyToMany(targetEntity: Beer::class)]
    private Collection $beer_test;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column(nullable: true)]
    private ?bool $isVerified = null;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
        $this->beer_favorite = new ArrayCollection();
        $this->beer_test = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    // /**
    //  * @see UserInterface
    //  */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
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
            $review->setUser($this);
        }

        return $this;
    }

    public function removeReview(Review $review): static
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getUser() === $this) {
                $review->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Beer>
     */
    public function getBeerFavorite(): Collection
    {
        return $this->beer_favorite;
    }

    public function addBeerFavorite(Beer $beerFavorite): static
    {
        if (!$this->beer_favorite->contains($beerFavorite)) {
            $this->beer_favorite->add($beerFavorite);
        }

        return $this;
    }

    public function removeBeerFavorite(Beer $beerFavorite): static
    {
        $this->beer_favorite->removeElement($beerFavorite);

        return $this;
    }

    /**
     * @return Collection<int, Beer>
     */
    public function getBeerTest(): Collection
    {
        return $this->beer_test;
    }

    public function addBeerTest(Beer $beerTest): static
    {
        if (!$this->beer_test->contains($beerTest)) {
            $this->beer_test->add($beerTest);
        }

        return $this;
    }

    public function removeBeerTest(Beer $beerTest): static
    {
        $this->beer_test->removeElement($beerTest);

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function isIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(?bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }
}
