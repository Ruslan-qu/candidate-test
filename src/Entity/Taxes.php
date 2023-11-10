<?php

namespace App\Entity;

use App\Repository\TaxesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxesRepository::class)]
class Taxes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $country_of_taxation = null;

    #[ORM\Column(length: 255)]
    private ?string $tax_rate = null;

    #[ORM\Column(length: 255)]
    private ?string $tax_number = null;

    #[ORM\Column]
    private ?int $number_of_characters = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountryOfTaxation(): ?string
    {
        return $this->country_of_taxation;
    }

    public function setCountryOfTaxation(string $country_of_taxation): static
    {
        $this->country_of_taxation = $country_of_taxation;

        return $this;
    }

    public function getTaxRate(): ?string
    {
        return $this->tax_rate;
    }

    public function setTaxRate(string $tax_rate): static
    {
        $this->tax_rate = $tax_rate;

        return $this;
    }

    public function getTaxNumber(): ?string
    {
        return $this->tax_number;
    }

    public function setTaxNumber(string $tax_number): static
    {
        $this->tax_number = $tax_number;

        return $this;
    }

    public function getNumberOfCharacters(): ?int
    {
        return $this->number_of_characters;
    }

    public function setNumberOfCharacters(int $number_of_characters): static
    {
        $this->number_of_characters = $number_of_characters;

        return $this;
    }
}
