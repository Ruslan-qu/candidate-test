<?php

namespace App\Service;

use App\Validator\ValidatorData;
use App\Calculation\Calculation;
use App\Service\CalculatePriceServiceInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class CalculatePriceService implements CalculatePriceServiceInterface
{
    public function verificationCalculation(
        $productsRepository,
        $taxesRepository,
        $couponsRepository,
        $body_request
    ): array {

        if (empty($body_request['product'])) {
            throw new BadRequestHttpException('Not defined product');
        }
        if (empty($body_request['taxNumber'])) {
            throw new BadRequestHttpException('Not defined taxNumber');
        }
        /* class ValidatorPrice for data validation*/
        $validatorData = new ValidatorData();

        $arr_errors = [];
        $product = $body_request['product'];
        $pattern = '/^[a-z]+$/i';
        $message = 'Product contains an invalid character';
        $key_error = 'product';
        $arr_errors[] = $validatorData
            ->ValidatorRegex($product, $pattern, $message, $key_error);

        $tax_number = $body_request['taxNumber'];
        $pattern = '/^([a-z]{2}([a-z|0-9]{2})?[0-9]{9}){1}$/i';
        $message = 'TaxNumber contains an invalid number';
        $key_error = 'taxNumber';
        $arr_errors[] = $validatorData
            ->ValidatorRegex($tax_number, $pattern, $message, $key_error);

        $couponCode = '';
        if (!empty($body_request['couponCode'])) {
            $couponCode = $body_request['couponCode'];
            $pattern = '/^([a-z]{1}[0-9]{2})?$/i';
            $message = 'couponCode contains an invalid number';
            $key_error = 'couponCode';
            $arr_errors[] = $validatorData
                ->ValidatorRegex($couponCode, $pattern, $message, $key_error);
        }

        $array_filter_errors = array_filter($arr_errors);

        if (empty($array_filter_errors)) {

            $name_product = strtolower($product);
            $product = $productsRepository->findOneByProductPrice($name_product);
            $price_product = $product[0]['price_product'];

            $taxe = strtolower($tax_number);
            $tax_number_substr = substr($taxe, 0, 2);
            $tax_amount = $taxesRepository->findOneByPercentageTaxes($tax_number_substr);
            $tax_rate = $tax_amount[0]['tax_rate'];

            $discount = 0;
            $id_type_coupon = 0;
            if ($couponCode) {
                $number_coupon = strtolower($couponCode);
                $coupon_code = $couponsRepository->findOneByDiscountAmount($number_coupon);
                $discount = $coupon_code[0]['discount'];
                $id_type_coupon = $coupon_code[0]['id'];
            }

            $calculationAmount = new Calculation();

            $amount = $calculationAmount->calculationProductPrice(
                $price_product,
                $tax_rate,
                $discount,
                $id_type_coupon
            );
            $arr_amount = ['amount' => $amount];

            return $arr_amount;
        } else {

            $arr_data_errors = ['Error' => $array_filter_errors];
            $json_arr_data_errors = json_encode($arr_data_errors);
            throw new BadRequestHttpException($json_arr_data_errors);
        }
    }
}
