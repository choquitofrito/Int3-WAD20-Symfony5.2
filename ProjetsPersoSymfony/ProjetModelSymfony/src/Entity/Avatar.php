<?php

namespace App\Entity;

use App\Repository\AvatarRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvatarRepository::class)
 */
class Avatar
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
    private $lien;

    /**
     * @ORM\OneToOne(targetEntity=Client::class, inversedBy="avatar", cascade={"persist", "remove"})
     */
    private $utlisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getUtlisateur(): ?Client
    {
        return $this->utlisateur;
    }

    public function setUtlisateur(?Client $utlisateur): self
    {
        $this->utlisateur = $utlisateur;

        return $this;
    }
}
