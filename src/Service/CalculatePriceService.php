<?php

namespace App\Service;

use App\Validator\ValidatorPrice;
use App\Service\CalculatePriceServiceInterface;



class CalculatePriceService implements CalculatePriceServiceInterface
{
    private $validatorPrice;

    public function __construct(ValidatorPrice $validatorPrice)
    {
        $this->validatorPrice = $validatorPrice;
    }
    public function ValidatorCalculatePrice($body_request): void
    {
        $this->validatorPrice->PriceValidator($body_request);
    }
}
