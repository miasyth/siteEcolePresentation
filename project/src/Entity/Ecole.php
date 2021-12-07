<?php

namespace App\Entity;

use App\Repository\EcoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EcoleRepository::class)
 */
class Ecole
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Utilisateur::class, cascade={"persist", "remove"})
     */
    private $IdDirectrice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDirectrice(): ?Utilisateur
    {
        return $this->IdDirectrice;
    }

    public function setIdDirectrice(?Utilisateur $IdDirectrice): self
    {
        $this->IdDirectrice = $IdDirectrice;

        return $this;
    }
}
