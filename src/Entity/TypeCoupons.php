<?php

namespace App\Entity;

use App\Entity\Coupons;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\TypeCouponsRepository;

#[ORM\Entity(repositoryClass: TypeCouponsRepository::class)]
class TypeCoupons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type_coupon = null;

    #[ORM\OneToMany(mappedBy: 'id_type_coupon', targetEntity: Coupons::class)]
    private Collection $coupons_type_coupon1;

    public function __construct()
    {
        $this->coupons_type_coupon1 = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCoupon(): ?string
    {
        return $this->type_coupon;
    }

    public function setTypeCoupon(string $type_coupon): static
    {
        $this->type_coupon = $type_coupon;

        return $this;
    }

    /**
     * @return Collection<int, Coupons>
     */
    public function getCouponsTypeCoupon1(): Collection
    {
        return $this->coupons_type_coupon1;
    }

    public function addCouponsTypeCoupon1(Coupons $couponsTypeCoupon1): static
    {
        if (!$this->coupons_type_coupon1->contains($couponsTypeCoupon1)) {
            $this->coupons_type_coupon1->add($couponsTypeCoupon1);
            $couponsTypeCoupon1->setIdTypeCoupon($this);
        }

        return $this;
    }

    public function removeCouponsTypeCoupon1(Coupons $couponsTypeCoupon1): static
    {
        if ($this->coupons_type_coupon1->removeElement($couponsTypeCoupon1)) {
            // set the owning side to null (unless already changed)
            if ($couponsTypeCoupon1->getIdTypeCoupon() === $this) {
                $couponsTypeCoupon1->setIdTypeCoupon(null);
            }
        }

        return $this;
    }
}
