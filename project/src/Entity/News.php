<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsRepository::class)
 */
class News
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
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ecole;

    /**
     * @ORM\ManyToOne(targetEntity=Classe::class, inversedBy="idNews")
     */
    private $idClasse;

    /**
     * @ORM\OneToMany(targetEntity=Photo::class, mappedBy="idNews")
     */
    private $idPhotos;

    /**
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="idNews")
     */
    private $idVideos;

    public function __construct()
    {
        $this->idPhotos = new ArrayCollection();
        $this->idVideos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getEcole(): ?bool
    {
        return $this->ecole;
    }

    public function setEcole(bool $ecole): self
    {
        $this->ecole = $ecole;

        return $this;
    }

    public function getIdClasse(): ?Classe
    {
        return $this->idClasse;
    }

    public function setIdClasse(?Classe $idClasse): self
    {
        $this->idClasse = $idClasse;

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
            $idPhoto->setIdNews($this);
        }

        return $this;
    }

    public function removeIdPhoto(Photo $idPhoto): self
    {
        if ($this->idPhotos->removeElement($idPhoto)) {
            // set the owning side to null (unless already changed)
            if ($idPhoto->getIdNews() === $this) {
                $idPhoto->setIdNews(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getIdVideos(): Collection
    {
        return $this->idVideos;
    }

    public function addIdVideo(Video $idVideo): self
    {
        if (!$this->idVideos->contains($idVideo)) {
            $this->idVideos[] = $idVideo;
            $idVideo->setIdNews($this);
        }

        return $this;
    }

    public function removeIdVideo(Video $idVideo): self
    {
        if ($this->idVideos->removeElement($idVideo)) {
            // set the owning side to null (unless already changed)
            if ($idVideo->getIdNews() === $this) {
                $idVideo->setIdNews(null);
            }
        }

        return $this;
    }
}
