<?php

namespace App\Entity;

use App\Repository\TypefraisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypefraisRepository::class)
 */
class Typefrais
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $fraistype;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libellé;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFraistype(): ?int
    {
        return $this->fraistype;
    }

    public function setFraistype(int $fraistype): self
    {
        $this->fraistype = $fraistype;

        return $this;
    }

    public function getLibellé(): ?string
    {
        return $this->libellé;
    }

    public function setLibellé(string $libellé): self
    {
        $this->libellé = $libellé;

        return $this;
    }
}
