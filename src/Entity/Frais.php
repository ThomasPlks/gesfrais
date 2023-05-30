<?php

namespace App\Entity;

use App\Repository\FraisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FraisRepository::class)
 */
class Frais
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
    private $frais;

    /**
     * @ORM\Column(type="date")
     */
    private $datecreation;

    /**
     * @ORM\Column(type="date")
     */
    private $fraisdate;

    /**
     * @ORM\Column(type="date")
     */
    private $datemaj;

    /**
     * @ORM\Column(type="integer")
     */
    private $fraistype;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fraisuser;

    /**
     * @ORM\Column(type="integer")
     */
    private $gestuser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fichier;

    /**
     * @ORM\Column(type="integer")
     */
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getFraisdate(): ?\DateTimeInterface
    {
        return $this->fraisdate;
    }

    public function setFraisdate(\DateTimeInterface $fraisdate): self
    {
        $this->fraisdate = $fraisdate;

        return $this;
    }

    public function getDatemaj(): ?\DateTimeInterface
    {
        return $this->datemaj;
    }

    public function setDatemaj(\DateTimeInterface $datemaj): self
    {
        $this->datemaj = $datemaj;

        return $this;
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

    public function getFraisuser(): ?string
    {
        return $this->fraisuser;
    }

    public function setFraisuser(string $fraisuser): self
    {
        $this->fraisuser = $fraisuser;

        return $this;
    }

    public function getGestuser(): ?int
    {
        return $this->gestuser;
    }

    public function setGestuser(int $gestuser): self
    {
        $this->gestuser = $gestuser;

        return $this;
    }

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
