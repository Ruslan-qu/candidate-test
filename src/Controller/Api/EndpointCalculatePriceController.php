<?php

namespace App\Controller\Api;

use App\Repository\TaxesRepository;
use App\Repository\CouponsRepository;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Service\CalculatePriceServiceInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EndpointCalculatePriceController extends AbstractController
{
    #[Rest\Post('/api/calculate-price', name: 'calculate-price',)]
    public function CalculatePrice(
        Request $request,
        CalculatePriceServiceInterface $CalculatePriceServiceInterface,
        ProductsRepository $productsRepository,
        TaxesRepository $taxesRepository,
        CouponsRepository $couponsRepository,
    ): JsonResponse {
        $body_request = json_decode($request->getContent(), true);

        $amount = $CalculatePriceServiceInterface->verificationCalculation(
            $productsRepository,
            $taxesRepository,
            $couponsRepository,
            $body_request
        );

        $data = ['product_price' => $amount];
        return new JsonResponse($data);
    }
}
