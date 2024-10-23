<?php

namespace App\Entity;

use App\Repository\LibraryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LibraryRepository::class)]
class Library
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $website = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    /**
     * @var Collection<int, Author>
     */
    #[ORM\OneToMany(targetEntity: Author::class, mappedBy: 'library')]
    private Collection $author_library;

    public function __construct()
    {
        $this->author_library = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
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

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): static
    {
        $this->website = $website;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * @return Collection<int, Author>
     */
    public function getAuthorLibrary(): Collection
    {
        return $this->author_library;
    }

    public function addAuthorLibrary(Author $authorLibrary): static
    {
        if (!$this->author_library->contains($authorLibrary)) {
            $this->author_library->add($authorLibrary);
            $authorLibrary->setLibrary($this);
        }

        return $this;
    }

    public function removeAuthorLibrary(Author $authorLibrary): static
    {
        if ($this->author_library->removeElement($authorLibrary)) {
            // set the owning side to null (unless already changed)
            if ($authorLibrary->getLibrary() === $this) {
                $authorLibrary->setLibrary(null);
            }
        }

        return $this;
    }
}
