<?php

namespace App\Entity;

use App\Repository\MovieEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieEntityRepository::class)]
class MovieEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $views = null;

    #[ORM\Column(length: 255)]
    private ?string $locations = null;

    #[ORM\ManyToMany(targetEntity: ActorEntity::class, inversedBy: 'movieEntities')]
    private Collection $actors;

    public function __construct()
    {
        $this->actors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(int $views): static
    {
        $this->views = $views;

        return $this;
    }

    public function getLocations(): ?string
    {
        return $this->locations;
    }

    public function setLocations(string $locations): static
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * @return Collection<int, ActorEntity>
     */
    public function getActors(): Collection
    {
        return $this->actors;
    }

    public function addActor(ActorEntity $actor): static
    {
        if (!$this->actors->contains($actor)) {
            $this->actors->add($actor);
        }

        return $this;
    }

    public function removeActor(ActorEntity $actor): static
    {
        $this->actors->removeElement($actor);

        return $this;
    }
}
