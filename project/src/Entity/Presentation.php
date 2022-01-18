<?php

namespace App\Entity;

use App\Repository\PresentationRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PresentationRepository::class)
 * @ApiResource( 
 *     normalizationContext={"groups"={"presentation:read"}},
 *     denormalizationContext={"groups"={"presentation:write"}},
 *     itemOperations={"put","get","delete"}
 * )
 */
class Presentation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"presentation:read","presentation:write"})
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Text::class, cascade={"persist", "remove"})
     * @Groups({"presentation:read","presentation:write"})
     */
    private $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?Text
    {
        return $this->text;
    }

    public function setText(?Text $text): self
    {
        $this->text = $text;

        return $this;
    }
}
