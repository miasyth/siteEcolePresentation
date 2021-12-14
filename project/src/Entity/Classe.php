<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity=Photo::class, cascade={"persist", "remove"})
     */
    private $idPhoto;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="idClasse")
     */
    private $idProfs;

    /**
     * @ORM\OneToMany(targetEntity=News::class, mappedBy="idClasse")
     */
    private $idNews;

    /**
     * @ORM\OneToMany(targetEntity=Photo::class, mappedBy="idClasse")
     */
    private $idPhotos;

    public function __construct()
    {
        $this->idProfs = new ArrayCollection();
        $this->idNews = new ArrayCollection();
        $this->idPhotos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdPhoto(): ?Photo
    {
        return $this->idPhoto;
    }

    public function setIdPhoto(?Photo $idPhoto): self
    {
        $this->idPhoto = $idPhoto;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getIdProfs(): Collection
    {
        return $this->idProfs;
    }

    public function addIdProf(Utilisateur $idProf): self
    {
        if (!$this->idProfs->contains($idProf)) {
            $this->idProfs[] = $idProf;
            $idProf->setIdClasse($this);
        }

        return $this;
    }

    public function removeIdProf(Utilisateur $idProf): self
    {
        if ($this->idProfs->removeElement($idProf)) {
            // set the owning side to null (unless already changed)
            if ($idProf->getIdClasse() === $this) {
                $idProf->setIdClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|News[]
     */
    public function getIdNews(): Collection
    {
        return $this->idNews;
    }

    public function addIdNews(News $idNews): self
    {
        if (!$this->idNews->contains($idNews)) {
            $this->idNews[] = $idNews;
            $idNews->setIdClasse($this);
        }

        return $this;
    }

    public function removeIdNews(News $idNews): self
    {
        if ($this->idNews->removeElement($idNews)) {
            // set the owning side to null (unless already changed)
            if ($idNews->getIdClasse() === $this) {
                $idNews->setIdClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Photo[]
     */
    public function getIdPhotos(): Collection
    {
        return $this->idPhotos;
    }

    public function addIdPhoto(Photo $idPhoto): self
    {
        if (!$this->idPhotos->contains($idPhoto)) {
            $this->idPhotos[] = $idPhoto;
            $idPhoto->setIdClasse($this);
        }

        return $this;
    }

    public function removeIdPhoto(Photo $idPhoto): self
    {
        if ($this->idPhotos->removeElement($idPhoto)) {
            // set the owning side to null (unless already changed)
            if ($idPhoto->getIdClasse() === $this) {
                $idPhoto->setIdClasse(null);
            }
        }

        return $this;
    }
}
