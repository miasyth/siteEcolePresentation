<?php

namespace App\Entity;

use App\Repository\TextRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TextRepository::class)
 * @ApiResource( 
 *     normalizationContext={"groups"={"text:read"}},
 *     denormalizationContext={"groups"={"text:write"}},
 *     itemOperations={"put","get","delete"}
 * )
 */
class Text
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"text:read","text:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"text:read","text:write"})
     */
    private $ordre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"text:read","text:write"})
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"text:read","text:write"})
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity=News::class, inversedBy="texts")
     * @Groups({"text:read","text:write"})
     */
    private $news;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

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
