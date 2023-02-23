<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message:"firstNameUser is required")]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstNameUser = null;

    #[Assert\NotBlank(message:"LastName is required")]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $LastName = null;

    #[Assert\NotBlank(message:"emailUser is required")]


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $emailUser = null;

    #[Assert\NotBlank(message:"password is required")]


    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[Assert\NotBlank(message:"NumTelephoneUser is required")]


    #[ORM\Column]
    private ?int $NumTelephoneUser = null;

    #[Assert\NotBlank(message:"cinUser is required")]


    #[ORM\Column(nullable: true)]
    private ?int $cinUser = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Role $Role = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstNameUser(): ?string
    {
        return $this->firstNameUser;
    }

    public function setFirstNameUser(?string $firstNameUser): self
    {
        $this->firstNameUser = $firstNameUser;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(?string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(?string $emailUser): self
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNumTelephoneUser(): ?int
    {
        return $this->NumTelephoneUser;
    }

    public function setNumTelephoneUser(int $NumTelephoneUser): self
    {
        $this->NumTelephoneUser = $NumTelephoneUser;

        return $this;
    }

    public function getCinUser(): ?int
    {
        return $this->cinUser;
    }

    public function setCinUser(?int $cinUser): self
    {
        $this->cinUser = $cinUser;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->Role;
    }

    public function setRole(?Role $Role): self
    {
        $this->Role = $Role;

        return $this;
    }
}
