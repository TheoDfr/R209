<?php

namespace App\Entity;

use App\Repository\DiplomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DiplomeRepository::class)
 */
class Diplome
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity=Univ::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Univ;

    /**
     * @ORM\ManyToOne(targetEntity=But::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $But;

    /**
     * @ORM\ManyToOne(targetEntity=Intitule::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Intitule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getUniv(): ?univ
    {
        return $this->Univ;
    }

    public function setUniv(?univ $Univ): self
    {
        $this->Univ = $Univ;

        return $this;
    }

    public function getBut(): ?But
    {
        return $this->But;
    }

    public function setBut(?But $But): self
    {
        $this->But = $But;

        return $this;
    }

    public function getIntitule(): ?Intitule
    {
        return $this->Intitule;
    }

    public function setIntitule(?Intitule $Intitule): self
    {
        $this->Intitule = $Intitule;

        return $this;
    }
}
