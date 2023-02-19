<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomProduit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PrixProduit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $QuantiteProduit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageProduit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DescriptionProduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->NomProduit;
    }

    public function setNomProduit(?string $NomProduit): self
    {
        $this->NomProduit = $NomProduit;

        return $this;
    }

    public function getPrixProduit(): ?string
    {
        return $this->PrixProduit;
    }

    public function setPrixProduit(?string $PrixProduit): self
    {
        $this->PrixProduit = $PrixProduit;

        return $this;
    }

    public function getQuantiteProduit(): ?string
    {
        return $this->QuantiteProduit;
    }

    public function setQuantiteProduit(?string $QuantiteProduit): self
    {
        $this->QuantiteProduit = $QuantiteProduit;

        return $this;
    }

    public function getImageProduit(): ?string
    {
        return $this->ImageProduit;
    }

    public function setImageProduit(?string $ImageProduit): self
    {
        $this->ImageProduit = $ImageProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->DescriptionProduit;
    }

    public function setDescriptionProduit(?string $DescriptionProduit): self
    {
        $this->DescriptionProduit = $DescriptionProduit;

        return $this;
    }
}
