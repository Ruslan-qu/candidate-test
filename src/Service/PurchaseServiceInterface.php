<?php

namespace App\Service;

interface  PurchaseServiceInterface
{
    public function paymentVerification(
        $amount,
        $body_request
    ): array;
}
