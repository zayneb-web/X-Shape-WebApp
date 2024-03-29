<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $emailReclamation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ObjetReclamation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ContenueReclamation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmailReclamation(): ?string
    {
        return $this->emailReclamation;
    }

    public function setEmailReclamation(?string $emailReclamation): self
    {
        $this->emailReclamation = $emailReclamation;

        return $this;
    }

    public function getObjetReclamation(): ?string
    {
        return $this->ObjetReclamation;
    }

    public function setObjetReclamation(?string $ObjetReclamation): self
    {
        $this->ObjetReclamation = $ObjetReclamation;

        return $this;
    }

    public function getContenueReclamation(): ?string
    {
        return $this->ContenueReclamation;
    }

    public function setContenueReclamation(?string $ContenueReclamation): self
    {
        $this->ContenueReclamation = $ContenueReclamation;

        return $this;
    }

    public function getTypeUser(): ?string
    {
        return $this->typeUser;
    }

    public function setTypeUser(?string $typeUser): self
    {
        $this->typeUser = $typeUser;

        return $this;
    }
}
