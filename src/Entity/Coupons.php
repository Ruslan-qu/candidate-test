<?php

namespace App\Entity;

use App\Repository\CouponsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CouponsRepository::class)]
class Coupons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $number_coupon = null;

    #[ORM\ManyToOne(inversedBy: 'TypeCouponsCoupons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeCoupons $id_type_coupon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberCoupon(): ?string
    {
        return $this->number_coupon;
    }

    public function setNumberCoupon(string $number_coupon): static
    {
        $this->number_coupon = $number_coupon;

        return $this;
    }

    public function getIdTypeCoupon(): ?TypeCoupons
    {
        return $this->id_type_coupon;
    }

    public function setIdTypeCoupon(?TypeCoupons $id_type_coupon): static
    {
        $this->id_type_coupon = $id_type_coupon;

        return $this;
    }
}
