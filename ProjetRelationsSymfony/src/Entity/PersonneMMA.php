<?php

namespace App\Entity;

use App\Repository\PersonneMMARepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneMMARepository::class)
 */
class PersonneMMA
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
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity=SupervisionMMA::class, mappedBy="superviseur")
     */
    private $supervisionsSuperviseur;

    /**
     * @ORM\OneToMany(targetEntity=SupervisionMMA::class, mappedBy="supervisee")
     */
    private $supervisionsSupervisees;

    public function __construct()
    {
        $this->supervisionsSuperviseur = new ArrayCollection();
        $this->supervisionsSupervisees = new ArrayCollection();
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
     * @return Collection|SupervisionMMA[]
     */
    public function getSupervisionsSuperviseur(): Collection
    {
        return $this->supervisionsSuperviseur;
    }

    public function addSupervisionsSuperviseur(SupervisionMMA $supervisionsSuperviseur): self
    {
        if (!$this->supervisionsSuperviseur->contains($supervisionsSuperviseur)) {
            $this->supervisionsSuperviseur[] = $supervisionsSuperviseur;
            $supervisionsSuperviseur->setSuperviseur($this);
        }

        return $this;
    }

    public function removeSupervisionsSuperviseur(SupervisionMMA $supervisionsSuperviseur): self
    {
        if ($this->supervisionsSuperviseur->removeElement($supervisionsSuperviseur)) {
            // set the owning side to null (unless already changed)
            if ($supervisionsSuperviseur->getSuperviseur() === $this) {
                $supervisionsSuperviseur->setSuperviseur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SupervisionMMA[]
     */
    public function getSupervisionsSupervisees(): Collection
    {
        return $this->supervisionsSupervisees;
    }

    public function addSupervisionsSupervisee(SupervisionMMA $supervisionsSupervisee): self
    {
        if (!$this->supervisionsSupervisees->contains($supervisionsSupervisee)) {
            $this->supervisionsSupervisees[] = $supervisionsSupervisee;
            $supervisionsSupervisee->setSupervisee($this);
        }

        return $this;
    }

    public function removeSupervisionsSupervisee(SupervisionMMA $supervisionsSupervisee): self
    {
        if ($this->supervisionsSupervisees->removeElement($supervisionsSupervisee)) {
            // set the owning side to null (unless already changed)
            if ($supervisionsSupervisee->getSupervisee() === $this) {
                $supervisionsSupervisee->setSupervisee(null);
            }
        }

        return $this;
    }
}
