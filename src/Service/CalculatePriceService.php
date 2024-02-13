<?php

namespace App\Service;

use App\Validator\ValidatorData;
use Symfony\Component\HttpFoundation\Response;
use App\Service\CalculatePriceServiceInterface;
use PHPStan\PhpDocParser\Ast\Type\ThisTypeNode;
use Symfony\Component\HttpFoundation\JsonResponse;



class CalculatePriceService implements CalculatePriceServiceInterface
{
    public function verificationCalculation($body_request): JsonResponse
    {
        //  dd($body_request);
        if (empty($body_request['product'])) {
            $data = ['error' => 'Not defined product'];

            return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
        }
        if (empty($body_request['taxNumber'])) {
            $data = ['error' => 'Not defined taxNumber'];

            return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
        }
        /* class ValidatorPrice for data validation*/
        $ValidatorData = new ValidatorData();

        $arr_eroor = [];
        $product = $body_request['product'];
        $pattern = '/^[a-z]+$/i';
        $message = 'Product contains an invalid character';
        $key_eroor = 'product';
        $arr_eroor[] = $ValidatorData
            ->ValidatorRegex($product, $pattern, $message, $key_eroor);

        $taxNumber = $body_request['taxNumber'];
        $pattern = '/^([a-z]{2}([a-z|0-9]{2})?[0-9]{9}){1}$/i';
        $message = 'TaxNumber contains an invalid number';
        $key_eroor = 'taxNumber';
        $arr_eroor[] = $ValidatorData
            ->ValidatorRegex($taxNumber, $pattern, $message, $key_eroor);

        if (!empty($body_request['couponCode'])) {
            $couponCode = $body_request['couponCode'];
            $pattern = '/^([a-z]{1}[0-9]{2})?$/i';
            $message = 'couponCode contains an invalid number';
            $key_eroor = 'couponCode';
            $arr_eroor[] = $ValidatorData
                ->ValidatorRegex($couponCode, $pattern, $message, $key_eroor);
        }
        dd($arr_eroor);

        return 1;
    }

    public function notDefined($message): JsonResponse
    {
        $data = ['error' => $message];

        return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
    }
}
