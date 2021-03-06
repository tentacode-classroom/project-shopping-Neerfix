<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BoatRepository")
 */
class Boat
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\Column(type="integer", length=15)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materials;

    /**
     * @ORM\Column(type="float")
     */
    private $Length;

    /**
     * @ORM\Column(type="float")
     */
    private $Width;

    /**
     * @ORM\Column(type="integer")
     */
    private $berths;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $propulsion;

    /**
     * @ORM\Column(type="float")
     */
    private $speed;

    /**
     * @ORM\Column(type="integer")
     */
    private $power;

    /**
     * @ORM\Column(type="integer")
     */
    private $heliport;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $created_year;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbViews;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="boats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getMaterials(): ?string
    {
        return $this->materials;
    }

    public function setMaterials(string $materials): self
    {
        $this->materials = $materials;

        return $this;
    }

    public function getLength(): ?float
    {
        return $this->Length;
    }

    public function setLength(float $Length): self
    {
        $this->Length = $Length;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->Width;
    }

    public function setWidth(float $Width): self
    {
        $this->Width = $Width;

        return $this;
    }

    public function getBerths(): ?int
    {
        return $this->berths;
    }

    public function setBerths(int $berths): self
    {
        $this->berths = $berths;

        return $this;
    }

    public function getPropulsion(): ?string
    {
        return $this->propulsion;
    }

    public function setPropulsion(string $propulsion): self
    {
        $this->propulsion = $propulsion;

        return $this;
    }

    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    public function setSpeed(float $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(int $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getHeliport(): ?int
    {
        return $this->heliport;
    }

    public function setHeliport(int $heliport): self
    {
        $this->heliport = $heliport;

        return $this;
    }

    public function getCreatedYear(): ?string
    {
        return $this->created_year;
    }

    public function setCreatedYear(string $created_year): self
    {
        $this->created_year = $created_year;

        return $this;
    }

    public function getNbViews(): ?int
    {
        return $this->NbViews;
    }

    public function setNbViews(int $NbViews): self
    {
        $this->NbViews = $NbViews;

        return $this;
    }

    public function incrementViews() {
        $this->NbViews++;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
