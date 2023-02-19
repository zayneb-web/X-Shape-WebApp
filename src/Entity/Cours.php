<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomCours = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $themeCours = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $HeureCours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCours(): ?string
    {
        return $this->NomCours;
    }

    public function setNomCours(?string $NomCours): self
    {
        $this->NomCours = $NomCours;

        return $this;
    }

    public function getThemeCours(): ?string
    {
        return $this->themeCours;
    }

    public function setThemeCours(?string $themeCours): self
    {
        $this->themeCours = $themeCours;

        return $this;
    }

    public function getHeureCours(): ?string
    {
        return $this->HeureCours;
    }

    public function setHeureCours(?string $HeureCours): self
    {
        $this->HeureCours = $HeureCours;

        return $this;
    }
}
