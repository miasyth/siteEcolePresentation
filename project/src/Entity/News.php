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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $contenuClasse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="news")
     */
    private $videos;

    /**
     * @ORM\OneToMany(targetEntity=Text::class, mappedBy="news")
     */
    private $texts;

    /**
     * @ORM\OneToMany(targetEntity=PDF::class, mappedBy="news")
     */
    private $pDFs;

    /**
     * @ORM\OneToMany(targetEntity=ImageGroup::class, mappedBy="news")
     */
    private $imageGroups;

    /**
     * @ORM\ManyToOne(targetEntity=Classe::class, inversedBy="news")
     */
    private $classe;

    /**
     * @ORM\OneToOne(targetEntity=Photo::class, cascade={"persist", "remove"})
     */
    private $photo;

    public function __construct()
    {
        $this->videos = new ArrayCollection();
        $this->texts = new ArrayCollection();
        $this->pDFs = new ArrayCollection();
        $this->imageGroups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuClasse(): ?bool
    {
        return $this->contenuClasse;
    }

    public function setContenuClasse(?bool $contenuClasse): self
    {
        $this->contenuClasse = $contenuClasse;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setNews($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getNews() === $this) {
                $video->setNews(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Text[]
     */
    public function getTexts(): Collection
    {
        return $this->texts;
    }

    public function addText(Text $text): self
    {
        if (!$this->texts->contains($text)) {
            $this->texts[] = $text;
            $text->setNews($this);
        }

        return $this;
    }

    public function removeText(Text $text): self
    {
        if ($this->texts->removeElement($text)) {
            // set the owning side to null (unless already changed)
            if ($text->getNews() === $this) {
                $text->setNews(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PDF[]
     */
    public function getPDFs(): Collection
    {
        return $this->pDFs;
    }

    public function addPDF(PDF $pDF): self
    {
        if (!$this->pDFs->contains($pDF)) {
            $this->pDFs[] = $pDF;
            $pDF->setNews($this);
        }

        return $this;
    }

    public function removePDF(PDF $pDF): self
    {
        if ($this->pDFs->removeElement($pDF)) {
            // set the owning side to null (unless already changed)
            if ($pDF->getNews() === $this) {
                $pDF->setNews(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ImageGroup[]
     */
    public function getImageGroups(): Collection
    {
        return $this->imageGroups;
    }

    public function addImageGroup(ImageGroup $imageGroup): self
    {
        if (!$this->imageGroups->contains($imageGroup)) {
            $this->imageGroups[] = $imageGroup;
            $imageGroup->setNews($this);
        }

        return $this;
    }

    public function removeImageGroup(ImageGroup $imageGroup): self
    {
        if ($this->imageGroups->removeElement($imageGroup)) {
            // set the owning side to null (unless already changed)
            if ($imageGroup->getNews() === $this) {
                $imageGroup->setNews(null);
            }
        }

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

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function setPhoto(?Photo $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}
