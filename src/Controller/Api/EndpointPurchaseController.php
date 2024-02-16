<?php

namespace App\Controller\Api;

use App\Repository\TaxesRepository;
use App\Repository\CouponsRepository;
use App\Repository\ProductsRepository;
use App\Service\PurchaseServiceInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Service\CalculatePriceServiceInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EndpointPurchaseController extends AbstractController
{
    #[Rest\Post('/api/purchase', name: 'purchase',)]
    public function productPayment(
        Request $request,
        CalculatePriceServiceInterface $calculatePriceServiceInterface,
        PurchaseServiceInterface $purchaseServiceInterface,
        ProductsRepository $productsRepository,
        TaxesRepository $taxesRepository,
        CouponsRepository $couponsRepository,
    ): JsonResponse {

        $body_request = json_decode($request->getContent(), true);

        $amount = $calculatePriceServiceInterface->verificationCalculation(
            $productsRepository,
            $taxesRepository,
            $couponsRepository,
            $body_request
        );

        $payment = $purchaseServiceInterface->paymentVerification(
            $amount,
            $body_request
        );

        $data = ['successful_payment' => $payment];
        return new JsonResponse($data);
    }
}
