<?php

namespace App\Validator;

use App\Entity\Taxes;
use App\Entity\Coupons;
use App\Entity\Products;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class ValidatorPrice
{
    private $product;

    private $taxNumber;

    private $couponCode;

    public function __construct($body_request)
    {
        $this->product = $body_request['product'];

        $this->taxNumber = $body_request['taxNumber'];

        $this->couponCode = $body_request['couponCode'];
    }

    public function CheckingAvailabilityPrice(): JsonResponse
    {
        if (empty($this->product) || empty($this->taxNumber)) {
            $data = ['error' => 'Not defined product or taxNumber'];
            return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
        }
    }


    public function PriceValidator(): void
    {
        $this->CheckingAvailabilityPrice();

        /* Enabling validation and prescribing the validation condition and error message */
        $validator = Validation::createValidator();

        $input = [
            'product_error' => $this->product,
            'taxNumber_error' => $this->taxNumber,
            'couponCode_error' => $this->couponCode,
        ];

        $constraint = new Collection([
            'product_error' =>
            new Regex([
                'pattern' => '/^[a-z]+$/i',
                'message' => 'Product contains an invalid character'
            ]),
            'taxNumber_error' =>
            new Regex([
                'pattern' => '/^([a-z]{2}([a-z|0-9]{2})?[0-9]{9}){1}$/i',
                'message' => 'TaxNumber contains an invalid number'
            ]),
            'couponCode_error' => new Regex([
                'pattern' => '/^([a-z]{1}[0-9]{2})?$/i',
                'message' => 'CouponCode contains an invalid number'
            ]),
        ]);

        $errors = $validator->validate($input, $constraint);

        /* Validation */
        if (!$errors->count()) {
        } else {

            if ($errors) {
                foreach ($errors as $key) {
                }
            }
            $data = ['error' => 'The form contains an invalid character1'];
            //return $this->json($data, Response::HTTP_BAD_REQUEST);
        }
    }
}
