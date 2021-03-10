<?php

namespace App\Entity;

use App\Repository\AeroportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AeroportRepository::class)
 */
class Aeroport
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateMiseEnService;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heureMiseEnService;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDateMiseEnService(): ?\DateTimeInterface
    {
        return $this->dateMiseEnService;
    }

    public function setDateMiseEnService(?\DateTimeInterface $dateMiseEnService): self
    {
        $this->dateMiseEnService = $dateMiseEnService;

        return $this;
    }

    public function getHeureMiseEnService(): ?\DateTimeInterface
    {
        return $this->heureMiseEnService;
    }

    public function setHeureMiseEnService(?\DateTimeInterface $heureMiseEnService): self
    {
        $this->heureMiseEnService = $heureMiseEnService;

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
}
