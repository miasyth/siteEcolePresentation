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
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Classe::class, inversedBy="News")
     */
    private $classe;

    /**
     * @ORM\ManyToMany(targetEntity=Photo::class, inversedBy="news")
     */
    private $Photo;

    /**
     * @ORM\ManyToMany(targetEntity=Video::class, inversedBy="news")
     */
    private $Video;

    public function __construct()
    {
        $this->Photo = new ArrayCollection();
        $this->Video = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * @return Collection|Photo[]
     */
    public function getPhoto(): Collection
    {
        return $this->Photo;
    }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->Photo->contains($photo)) {
            $this->Photo[] = $photo;
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        $this->Photo->removeElement($photo);

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideo(): Collection
    {
        return $this->Video;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->Video->contains($video)) {
            $this->Video[] = $video;
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        $this->Video->removeElement($video);

        return $this;
    }
}
