<?php

namespace App\Entity;

use App\Repository\TypeCouponsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
    private Collection $TypeCouponsCoupons;

    public function __construct()
    {
        $this->TypeCouponsCoupons = new ArrayCollection();
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
    public function getTypeCouponsCoupons(): Collection
    {
        return $this->TypeCouponsCoupons;
    }

    public function addTypeCouponsCoupon(Coupons $typeCouponsCoupon): static
    {
        if (!$this->TypeCouponsCoupons->contains($typeCouponsCoupon)) {
            $this->TypeCouponsCoupons->add($typeCouponsCoupon);
            $typeCouponsCoupon->setIdTypeCoupon($this);
        }

        return $this;
    }

    public function removeTypeCouponsCoupon(Coupons $typeCouponsCoupon): static
    {
        if ($this->TypeCouponsCoupons->removeElement($typeCouponsCoupon)) {
            // set the owning side to null (unless already changed)
            if ($typeCouponsCoupon->getIdTypeCoupon() === $this) {
                $typeCouponsCoupon->setIdTypeCoupon(null);
            }
        }

        return $this;
    }
}
