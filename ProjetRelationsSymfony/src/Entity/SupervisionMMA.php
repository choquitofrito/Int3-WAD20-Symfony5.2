<?php

namespace App\Entity;

use App\Repository\SupervisionMMARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SupervisionMMARepository::class)
 */
class SupervisionMMA
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
    private $evaluation;

    /**
     * @ORM\ManyToOne(targetEntity=PersonneMMA::class, inversedBy="supervisionsSuperviseur")
     */
    private $superviseur;

    /**
     * @ORM\ManyToOne(targetEntity=PersonneMMA::class, inversedBy="supervisionsSupervisees")
     */
    private $supervisee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvaluation(): ?string
    {
        return $this->evaluation;
    }

    public function setEvaluation(string $evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getSuperviseur(): ?PersonneMMA
    {
        return $this->superviseur;
    }

    public function setSuperviseur(?PersonneMMA $superviseur): self
    {
        $this->superviseur = $superviseur;

        return $this;
    }

    public function getSupervisee(): ?PersonneMMA
    {
        return $this->supervisee;
    }

    public function setSupervisee(?PersonneMMA $supervisee): self
    {
        $this->supervisee = $supervisee;

        return $this;
    }
}
