<?php

namespace App\Service;

use App\Validator\ValidatorData;
use Symfony\Component\HttpFoundation\Response;
use App\Service\CalculatePriceServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;



class CalculatePriceService implements CalculatePriceServiceInterface
{
    public function verificationCalculation($body_request): int
    {
        //  dd($body_request);
        if (empty($body_request['product'])) {
            throw new BadRequestHttpException('Not defined product');
        }
        if (empty($body_request['taxNumber'])) {
            throw new BadRequestHttpException('Not defined taxNumber');
        }
        /* class ValidatorPrice for data validation*/
        $ValidatorData = new ValidatorData();

        $arr_errors = [];
        $product = $body_request['product'];
        $pattern = '/^[a-z]+$/i';
        $message = 'Product contains an invalid character';
        $key_error = 'product';
        $arr_errors[] = $ValidatorData
            ->ValidatorRegex($product, $pattern, $message, $key_error);

        $taxNumber = $body_request['taxNumber'];
        $pattern = '/^([a-z]{2}([a-z|0-9]{2})?[0-9]{9}){1}$/i';
        $message = 'TaxNumber contains an invalid number';
        $key_error = 'taxNumber';
        $arr_errors[] = $ValidatorData
            ->ValidatorRegex($taxNumber, $pattern, $message, $key_error);

        if (!empty($body_request['couponCode'])) {
            $couponCode = $body_request['couponCode'];
            $pattern = '/^([a-z]{1}[0-9]{2})?$/i';
            $message = 'couponCode contains an invalid number';
            $key_error = 'couponCode';
            $arr_errors[] = $ValidatorData
                ->ValidatorRegex($couponCode, $pattern, $message, $key_error);
        }
        //dd(array_filter($arr_eroors));
        $array_filter_errors = array_filter($arr_errors);
        //dd(array_filter($arr_eroor, count()));

        if (empty($array_filter_errors)) {
            dd($arr_errors);
        } else {

            $arr_data_errors = ['Eroor' => $array_filter_errors];
            $json_arr_data_errors = json_encode($arr_data_errors);
            throw new BadRequestHttpException($json_arr_data_errors);
        }
        return 1;
    }
}
