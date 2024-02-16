<?php

namespace App\Service;

use App\Validator\ValidatorData;
use App\Service\PurchaseServiceInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;



class PurchaseService implements PurchaseServiceInterface
{
    public function paymentVerification(
        $amount,
        $body_request
    ): array {

        if (empty($amount['amount'])) {
            throw new BadRequestHttpException('The "$price" does not exist');
        }
        if (empty($body_request['payment'])) {
            throw new BadRequestHttpException('The "$payment" does not exist');
        }

        /* class ValidatorPrice for data validation*/
        $validatorData = new ValidatorData();

        $price = $amount['amount'];
        $pattern = '/^[\d]+[\.,]?[\d]*$/';
        $message = '"$price" contains an invalid character';
        $key_error = 'price';
        $arr_errors[] = $validatorData
            ->ValidatorRegex($price, $pattern, $message, $key_error);

        $payment = $body_request['payment'];
        $pattern = '/^[\d]+[\.,]?[\d]*$/';
        $message = '"$payment" contains an invalid character';
        $key_error = 'payment';
        $arr_errors[] = $validatorData
            ->ValidatorRegex($payment, $pattern, $message, $key_error);

        $array_filter_errors = array_filter($arr_errors);
        if (!empty(array_filter($array_filter_errors))) {
            $arr_data_errors = ['Error' => $array_filter_errors];
            $json_arr_data_errors = json_encode($arr_data_errors);
            throw new BadRequestHttpException($json_arr_data_errors);
        }
        if ($price != $payment) {
            throw new BadRequestHttpException('"payment" the payment amount is incorrect');
        }
        $arr_payment = ['payment' => 'payment for the product has been successfully completed'];

        return $arr_payment;
    }
}
