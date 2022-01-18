<?php

namespace App\Entity;

use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PhotoRepository::class)
 * @ApiResource( 
 *     normalizationContext={"groups"={"photo:read"}},
 *     denormalizationContext={"groups"={"photo:write"}},
 *     itemOperations={"put","get","delete"}
 * )
 */
class Photo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"photo:read","photo:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"photo:read","photo:write"})
     */
    private $accueil;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"photo:read","photo:write"})
     */
    private $presentation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"photo:read","photo:write"})
     */
    private $ordre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"photo:read","photo:write"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"photo:read","photo:write"})
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity=ImageGroup::class, inversedBy="photos")
     * @Groups({"photo:read","photo:write"})
     */
    private $imageGroup;

    /**
     * @ORM\ManyToOne(targetEntity=Classe::class, inversedBy="photos")
     * @Groups({"photo:read","photo:write"})
     */
    private $classe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccueil(): ?bool
    {
        return $this->accueil;
    }

    public function setAccueil(?bool $accueil): self
    {
        $this->accueil = $accueil;

        return $this;
    }

    public function getPresentation(): ?bool
    {
        return $this->presentation;
    }

    public function setPresentation(?bool $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(?int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getImageGroup(): ?ImageGroup
    {
        return $this->imageGroup;
    }

    public function setImageGroup(?ImageGroup $imageGroup): self
    {
        $this->imageGroup = $imageGroup;

        return $this;
    }

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }
}
