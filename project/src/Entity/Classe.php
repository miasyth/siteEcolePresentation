<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ClasseRepository::class)
 * @ApiResource( 
 *     normalizationContext={"groups"={"classe:read"}},
 *     denormalizationContext={"groups"={"classe:write"}},
 *     itemOperations={"put","get","delete"}
 * )
 */
class Classe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"classe:read","classe:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"classe:read","classe:write"})
     */
    private $abreviation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"classe:read","classe:write"})
     */
    private $fullNAME;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="classe")
     * @Groups({"classe:read","classe:write"})
     */
    private $users;

    /**
     * @ORM\OneToOne(targetEntity=Photo::class, cascade={"persist", "remove"})
     * @Groups({"classe:read","classe:write"})
     */
    private $illusatration;

    /**
     * @ORM\OneToOne(targetEntity=News::class, cascade={"persist", "remove"})
     * @Groups({"classe:read","classe:write"})
     */
    private $contenu;

    /**
     * @ORM\OneToMany(targetEntity=Photo::class, mappedBy="classe")
     * @Groups({"classe:read","classe:write"})
     */
    private $photos;

    /**
     * @ORM\OneToMany(targetEntity=News::class, mappedBy="classe")
     * @Groups({"classe:read","classe:write"})
     */
    private $news;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->photos = new ArrayCollection();
        $this->news = new ArrayCollection();
    }

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

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setClasse($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getClasse() === $this) {
                $user->setClasse(null);
            }
        }

        return $this;
    }

    public function getIllusatration(): ?Photo
    {
        return $this->illusatration;
    }

    public function setIllusatration(?Photo $illusatration): self
    {
        $this->illusatration = $illusatration;

        return $this;
    }

    public function getContenu(): ?News
    {
        return $this->contenu;
    }

    public function setContenu(?News $contenu): self
    {
        $this->contenu = $contenu;

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
}
