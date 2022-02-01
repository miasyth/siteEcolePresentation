<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AccueilRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=AccueilRepository::class)
 */
class Accueil
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
    private $horaireOuverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $horaireGarderieMatin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $horaireGarderieSoir;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $horaireEtude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $horaireCantine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHoraireOuverture(): ?string
    {
        return $this->horaireOuverture;
    }

    public function setHoraireOuverture(?string $horaireOuverture): self
    {
        $this->horaireOuverture = $horaireOuverture;

        return $this;
    }

    public function getHoraireGarderieMatin(): ?string
    {
        return $this->horaireGarderieMatin;
    }

    public function setHoraireGarderieMatin(?string $horaireGarderieMatin): self
    {
        $this->horaireGarderieMatin = $horaireGarderieMatin;

        return $this;
    }

    public function getHoraireGarderieSoir(): ?string
    {
        return $this->horaireGarderieSoir;
    }

    public function setHoraireGarderieSoir(?string $horaireGarderieSoir): self
    {
        $this->horaireGarderieSoir = $horaireGarderieSoir;

        return $this;
    }

    public function getHoraireEtude(): ?string
    {
        return $this->horaireEtude;
    }

    public function setHoraireEtude(?string $horaireEtude): self
    {
        $this->horaireEtude = $horaireEtude;

        return $this;
    }

    public function getHoraireCantine(): ?string
    {
        return $this->horaireCantine;
    }

    public function setHoraireCantine(?string $horaireCantine): self
    {
        $this->horaireCantine = $horaireCantine;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }
}
