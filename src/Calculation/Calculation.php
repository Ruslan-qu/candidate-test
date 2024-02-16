<?php

namespace App\Calculation;

class Calculation
{
    public function calculationProductPrice(
        $price_product,
        $tax_rate,
        $discount,
        $id_type_coupon
    ): float {

        if ($id_type_coupon == 0) {
            $amount = $price_product + ($price_product / 100 * $tax_rate);
        } elseif ($id_type_coupon == 1) {
            $amount = ($price_product - ($price_product / 100 * $discount))
                + (($price_product - ($price_product / 100 * $discount)) / 100 * $tax_rate);
        } elseif ($id_type_coupon == 2) {
            $amount = ($price_product - $discount)
                + (($price_product - $discount) / 100 * $tax_rate);
        }

        return $amount;
    }
}
