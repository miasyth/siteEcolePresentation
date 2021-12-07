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
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="Classe")
     */
    private $utilisateurs;

    /**
     * @ORM\OneToMany(targetEntity=News::class, mappedBy="classe")
     */
    private $News;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
        $this->News = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
            $utilisateur->setClasse($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateurs->removeElement($utilisateur)) {
            // set the owning side to null (unless already changed)
            if ($utilisateur->getClasse() === $this) {
                $utilisateur->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|News[]
     */
    public function getNews(): Collection
    {
        return $this->News;
    }

    public function addNews(News $news): self
    {
        if (!$this->News->contains($news)) {
            $this->News[] = $news;
            $news->setClasse($this);
        }

        return $this;
    }

    public function removeNews(News $news): self
    {
        if ($this->News->removeElement($news)) {
            // set the owning side to null (unless already changed)
            if ($news->getClasse() === $this) {
                $news->setClasse(null);
            }
        }

        return $this;
    }
}
