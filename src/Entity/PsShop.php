<?php

namespace App\Entity;

use App\Repository\PsShopRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PsShopRepository::class)]
class PsShop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idShop = null;
    
    #[ORM\Column]
    private ?int $idShopGroup = null;

    #[ORM\Column(length:64)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $idCategory = null;

    #[ORM\Column(length:255)]
    private ?string $themeName = null;

    #[ORM\Column]
    private ?bool $active = null;

    #[ORM\Column]
    private ?bool $deleted = null;

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function setIdCategory(int $idCategory): self
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    public function getThemeName(): ?string
    {
        return $this->themeName;
    }

    public function setThemeName(string $themeName): self
    {
        $this->themeName = $themeName;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }
}
