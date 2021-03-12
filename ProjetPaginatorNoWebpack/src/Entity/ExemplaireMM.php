<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExemplaireMMRepository")
 */
class ExemplaireMM
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
    private $etat;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ClientMM", inversedBy="exemplaireMMs")
     */
    private $clientMMs;

    public function __construct()
    {
        $this->clientMMs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * @return Collection|ClientMM[]
     */
    public function getClientMMs(): Collection
    {
        return $this->clientMMs;
    }

    public function addClientMM(ClientMM $clientMM): self
    {
        if (!$this->clientMMs->contains($clientMM)) {
            $this->clientMMs[] = $clientMM;
        }

        return $this;
    }

    public function removeClientMM(ClientMM $clientMM): self
    {
        if ($this->clientMMs->contains($clientMM)) {
            $this->clientMMs->removeElement($clientMM);
        }

        return $this;
    }
}
