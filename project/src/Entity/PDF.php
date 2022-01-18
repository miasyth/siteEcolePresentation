<?php

namespace App\Entity;

use App\Repository\PDFRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PDFRepository::class)
 * @ApiResource( 
 *     normalizationContext={"groups"={"pdf:read"}},
 *     denormalizationContext={"groups"={"pdf:write"}},
 *     itemOperations={"put","get","delete"}
 * )
 */
class PDF
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"pdf:read","pdf:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"pdf:read","pdf:write"})
     */
    private $pres;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"pdf:read","pdf:write"})
     */
    private $ordre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"pdf:read","pdf:write"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"pdf:read","pdf:write"})
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity=News::class, inversedBy="pDFs")
     * @Groups({"pdf:read","pdf:write"})
     */
    private $news;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPres(): ?bool
    {
        return $this->pres;
    }

    public function setPres(?bool $pres): self
    {
        $this->pres = $pres;

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

    public function getNews(): ?News
    {
        return $this->news;
    }

    public function setNews(?News $news): self
    {
        $this->news = $news;

        return $this;
    }
}
