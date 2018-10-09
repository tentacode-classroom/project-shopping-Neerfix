<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Boat", mappedBy="category")
     */
    private $boats;

    public function __construct()
    {
        $this->boats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Boat[]
     */
    public function getBoats(): Collection
    {
        return $this->boats;
    }

    public function addBoat(Boat $boat): self
    {
        if (!$this->boats->contains($boat)) {
            $this->boats[] = $boat;
            $boat->setCategory($this);
        }

        return $this;
    }

    public function removeBoat(Boat $boat): self
    {
        if ($this->boats->contains($boat)) {
            $this->boats->removeElement($boat);
            // set the owning side to null (unless already changed)
            if ($boat->getCategory() === $this) {
                $boat->setCategory(null);
            }
        }

        return $this;
    }
}
