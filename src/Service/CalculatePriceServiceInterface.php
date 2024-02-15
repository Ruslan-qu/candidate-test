<?php

namespace App\Service;

interface  CalculatePriceServiceInterface
{
    public function verificationCalculation(
        $productsRepository,
        $taxesRepository,
        $couponsRepository,
        $body_request
    ): array;
}
