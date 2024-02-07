<?php

namespace App\Controller\Api;

use App\Entity\Taxes;
use App\Entity\Coupons;
use App\Entity\Products;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;

class EndpointCalculatePriceController extends AbstractController
{
    #[Rest\Post('/calculate-price', name: 'calculate-price',)]
    public function CalculatePriceWithACoupon(
        ManagerRegistry $doctrine,
        ValidatorInterface $validator,
        Request $request,
    ): Response {
        //dd(json_decode($request->getContent(), true));
        $body = json_decode($request->getContent(), true);

        $product = $body['product'];
        $taxNumber = $body['taxNumber'];
        $couponCode = $body['couponCode'];

        /* class JsonResponse*/
        $response = new JsonResponse;

        /* Enabling validation and prescribing the validation condition and error message */
        $validator = Validation::createValidator();

        $input = [
            'product_error' => $product,
            'taxNumber_error' => $taxNumber,
            'couponCode_error' => $couponCode,
        ];

        $constraint = new Collection([
            'product_error' => new Regex([
                'pattern' => '/^[a-z]+$/i',
                'message' => 'The form contains an invalid character'
            ]),
            'taxNumber_error' => new Regex([
                'pattern' => '/^([a-z]{2}([a-z|0-9]{2})?[0-9]{9}){1}$/i',
                'message' => 'The form contains an invalid number'
            ]),
            'couponCode_error' => new Regex([
                'pattern' => '/^([a-z]{1}[0-9]{2})?$/i',
                'message' => 'The form contains an invalid number'
            ]),
        ]);

        $errors_regex = $validator->validate($input, $constraint);

        /* Validation */
        if (!$errors_regex->count()) {

            $name_product = strtolower($product);

            $number_coupon = strtolower($couponCode);

            $taxe = strtolower($taxNumber);
            $tax_number = substr($taxe, 0, 2);

            $сount_product = $doctrine->getRepository(Products::class)
                ->count(['name_product' => $name_product]);

            $сount_taxe = $doctrine->getRepository(Taxes::class)
                ->count(['tax_number' => $tax_number]);

            $сount_coupon = $doctrine->getRepository(Coupons::class)
                ->count(['number_coupon' => $number_coupon]);

            /*checking numbers in the database*/
            if ($сount_product != 0) {

                $find_one_by_product = $doctrine->getRepository(Products::class)
                    ->findOneBy(['name_product' => $name_product]);
            } else {

                $data = ['error' => 'there is no such number'];
                return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
            }
            /*checking numbers in the database*/
            if ($сount_taxe != 0) {

                $find_one_by_tax = $doctrine->getRepository(Taxes::class)
                    ->findOneBy(['tax_number' => $tax_number]);
            } else {

                $data = ['error' => 'there is no such number'];
                return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
            }
            /*checking numbers in the database*/
            if ($сount_coupon != 0) {

                $find_one_by_coupon = $doctrine->getRepository(Coupons::class)
                    ->findOneBy(['number_coupon' => $number_coupon]);
            } else {

                $data = ['error' => 'there is no such number'];
                return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
            }

            $price_product = $find_one_by_product->getPriceProduct();

            $tax_rate = $find_one_by_tax->getTaxRate();

            $discount = $find_one_by_coupon->getDiscount();

            $id_type_coupon = $find_one_by_coupon->getIdTypeCoupon()->getId();

            if ($id_type_coupon == 1) {
                $amount = ($price_product - ($price_product / 100 * $discount))
                    + (($price_product - ($price_product / 100 * $discount)) / 100 * $tax_rate);
            } elseif ($id_type_coupon == 2) {
                $amount = ($price_product - $discount) + (($price_product - $discount) / 100 * $tax_rate);
            }

            $data = ['amount' => $amount];
            return new JsonResponse($data);
        } else {


            $data = ['error' => 'The form contains an invalid character'];
            return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
        }
    }


    #[Route('/3calculate-price/product/{product}/taxNumber/{taxNumber}')]
    public function CalculatePriceWithoutCoupon(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        $product,
        $taxNumber,
    ): Response {

        /* class JsonResponse*/
        $response = new JsonResponse;

        /* Enabling validation and prescribing the validation condition and error message */
        $validator = Validation::createValidator();

        $input = [
            'product_error' => $product,
            'taxNumber_error' => $taxNumber,
        ];

        $constraint = new Collection([
            'product_error' => new Regex([
                'pattern' => '/^[a-z]+$/i',
                'message' => 'The form contains an invalid character'
            ]),
            'taxNumber_error' => new Regex([
                'pattern' => '/^([a-z]{2}([a-z|0-9]{2})?[0-9]{9}){1}$/i',
                'message' => 'The form contains an invalid number'
            ]),
        ]);

        $errors_regex = $validator->validate($input, $constraint);

        /* Validation */
        if (!$errors_regex->count()) {

            $name_product = strtolower($product);

            $taxe = strtolower($taxNumber);
            $tax_number = substr($taxe, 0, 2);

            $сount_product = $doctrine->getRepository(Products::class)
                ->count(['name_product' => $name_product]);

            $сount_taxe = $doctrine->getRepository(Taxes::class)
                ->count(['tax_number' => $tax_number]);

            /*checking numbers in the database*/
            if ($сount_product != 0) {

                $find_one_by_product = $doctrine->getRepository(Products::class)
                    ->findOneBy(['name_product' => $name_product]);
            } else {

                $response->setStatusCode(400);
                $response->setData(['error' => 'there is no such number']);
                return new Response('<html><body><pre>' . $response . '</pre></body></html>');
            }
            /*checking numbers in the database*/
            if ($сount_taxe != 0) {

                $find_one_by_tax = $doctrine->getRepository(Taxes::class)
                    ->findOneBy(['tax_number' => $tax_number]);
            } else {

                $response->setStatusCode(400);
                $response->setData(['error' => 'there is no such number']);
                return new Response('<html><body><pre>' . $response . '</pre></body></html>');
            }

            $price_product = $find_one_by_product->getPriceProduct();

            $tax_rate = $find_one_by_tax->getTaxRate();

            $amount = $price_product + ($price_product / 100 * $tax_rate);

            return new Response(
                '<html>
                <body>
                ' . $amount . ' euro
                <pre>
                ' . $response . '
                </pre>
                </body>
                </html>'
            );
        } else {

            $response->setStatusCode(400);
            $response->setData(['error' => 'The form contains an invalid character']);
            return new Response('<html><body><pre>' . $response . '</pre></body></html>');
        }
    }
}
