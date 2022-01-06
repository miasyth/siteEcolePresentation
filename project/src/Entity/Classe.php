<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasseRepository::class)
 */
class Classe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $abreviation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fullNAME;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAbreviation(): ?string
    {
        return $this->abreviation;
    }

    public function setAbreviation(?string $abreviation): self
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    public function getFullNAME(): ?string
    {
        return $this->fullNAME;
    }

    public function setFullNAME(?string $fullNAME): self
    {
        $this->fullNAME = $fullNAME;

        return $this;
    }
}
