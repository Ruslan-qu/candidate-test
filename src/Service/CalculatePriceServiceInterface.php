<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\JsonResponse;

interface  CalculatePriceServiceInterface
{
    public function verificationCalculation($body_request): JsonResponse;
}
