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
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="classe")
     */
    private $profs;

    /**
     * @ORM\OneToMany(targetEntity=News::class, mappedBy="classe")
     */
    private $news;

    /**
     * @ORM\OneToMany(targetEntity=Photo::class, mappedBy="classe")
     */
    private $photos;

    public function __construct()
    {
        $this->profs = new ArrayCollection();
        $this->news = new ArrayCollection();
        $this->photos = new ArrayCollection();
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

    public function getPhoto(): ?Photo
    {
        return $this->Photo;
    }

    public function setPhoto(?Photo $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getProfs(): Collection
    {
        return $this->profs;
    }

    public function addProf(Utilisateur $prof): self
    {
        if (!$this->profs->contains($prof)) {
            $this->profs[] = $prof;
            $prof->setClasse($this);
        }

        return $this;
    }

    public function removeProf(Utilisateur $prof): self
    {
        if ($this->profs->removeElement($prof)) {
            // set the owning side to null (unless already changed)
            if ($prof->getClasse() === $this) {
                $prof->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|News[]
     */
    public function getNews(): Collection
    {
        return $this->news;
    }

    public function addNews(News $news): self
    {
        if (!$this->news->contains($news)) {
            $this->news[] = $news;
            $news->setClasse($this);
        }

        return $this;
    }

    public function removeNews(News $news): self
    {
        if ($this->news->removeElement($news)) {
            // set the owning side to null (unless already changed)
            if ($news->getClasse() === $this) {
                $news->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Photo[]
     */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->photos->contains($photo)) {
            $this->photos[] = $photo;
            $photo->setClasse($this);
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        if ($this->photos->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getClasse() === $this) {
                $photo->setClasse(null);
            }
        }

        return $this;
    }
}
