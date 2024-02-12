<?php

namespace App\Service;

interface  CalculatePriceServiceInterface
{
    public function ValidatorCalculatePrice($body_request): void;
}
