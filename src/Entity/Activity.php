<?php

namespace App\Entity;

use App\Repository\ActivityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActivityRepository::class)]
class Activity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CodeActivity = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleActivity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeActivity(): ?string
    {
        return $this->CodeActivity;
    }

    public function setCodeActivity(?string $CodeActivity): self
    {
        $this->CodeActivity = $CodeActivity;

        return $this;
    }

    public function getLibelleActivity(): ?string
    {
        return $this->libelleActivity;
    }

    public function setLibelleActivity(string $libelleActivity): self
    {
        $this->libelleActivity = $libelleActivity;

        return $this;
    }
}
