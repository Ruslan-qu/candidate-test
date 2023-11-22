<?php

namespace App\Entity\Application;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\Application\ProductsRepository;

#[ORM\Entity(repositoryClass: ProductsRepository::class)]
class Products
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name_product = null;

    #[ORM\Column]
    private ?int $price_product = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameProduct(): ?string
    {
        return $this->name_product;
    }

    public function setNameProduct(string $name_product): static
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getPriceProduct(): ?int
    {
        return $this->price_product;
    }

    public function setPriceProduct(int $price_product): static
    {
        $this->price_product = $price_product;

        return $this;
    }
}
