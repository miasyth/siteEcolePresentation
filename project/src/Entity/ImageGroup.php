<?php

namespace App\Entity;

use App\Repository\ImageGroupRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ImageGroupRepository::class)
 * @ApiResource( 
 *     normalizationContext={"groups"={"imagegroup:read"}},
 *     denormalizationContext={"groups"={"imagegroup:write"}},
 *     itemOperations={"put","get","delete"}
 * )
 */
class ImageGroup
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"imagegroup:read","imagegroup:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"imagegroup:read","imagegroup:write"})
     */
    private $ordre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"imagegroup:read","imagegroup:write"})
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=News::class, inversedBy="imageGroups")
     * @Groups({"imagegroup:read","imagegroup:write"})
     */
    private $news;

    /**
     * @ORM\OneToMany(targetEntity=Photo::class, mappedBy="imageGroup")
     * @Groups({"imagegroup:read","imagegroup:write"})
     */
    private $photos;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNews(): ?News
    {
        return $this->news;
    }

    public function setNews(?News $news): self
    {
        $this->news = $news;

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
            $photo->setImageGroup($this);
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        if ($this->photos->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getImageGroup() === $this) {
                $photo->setImageGroup(null);
            }
        }

        return $this;
    }
}
