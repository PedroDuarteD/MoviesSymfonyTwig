<?php

namespace App\Entity;

use App\Repository\ActorEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActorEntityRepository::class)]
class ActorEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\ManyToMany(targetEntity: MovieEntity::class, mappedBy: 'actors')]
    private Collection $movieEntities;

    public function __construct()
    {
        $this->movieEntities = new ArrayCollection();
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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return Collection<int, MovieEntity>
     */
    public function getMovieEntities(): Collection
    {
        return $this->movieEntities;
    }

    public function addMovieEntity(MovieEntity $movieEntity): static
    {
        if (!$this->movieEntities->contains($movieEntity)) {
            $this->movieEntities->add($movieEntity);
            $movieEntity->addActor($this);
        }

        return $this;
    }

    public function removeMovieEntity(MovieEntity $movieEntity): static
    {
        if ($this->movieEntities->removeElement($movieEntity)) {
            $movieEntity->removeActor($this);
        }

        return $this;
    }
}
