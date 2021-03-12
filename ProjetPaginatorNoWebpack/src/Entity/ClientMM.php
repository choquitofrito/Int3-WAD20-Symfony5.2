<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientMMRepository")
 */
class ClientMM
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ExemplaireMM", mappedBy="clientMMs")
     */
    private $exemplaireMMs;

    public function __construct()
    {
        $this->exemplaireMMs = new ArrayCollection();
    }

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|ExemplaireMM[]
     */
    public function getExemplaireMMs(): Collection
    {
        return $this->exemplaireMMs;
    }

    public function addExemplaireMM(ExemplaireMM $exemplaireMM): self
    {
        if (!$this->exemplaireMMs->contains($exemplaireMM)) {
            $this->exemplaireMMs[] = $exemplaireMM;
            $exemplaireMM->addClientMM($this);
        }

        return $this;
    }

    public function removeExemplaireMM(ExemplaireMM $exemplaireMM): self
    {
        if ($this->exemplaireMMs->contains($exemplaireMM)) {
            $this->exemplaireMMs->removeElement($exemplaireMM);
            $exemplaireMM->removeClientMM($this);
        }

        return $this;
    }
}
