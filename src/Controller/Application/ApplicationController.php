<?php

namespace App\Controller\Application;

use StripePaymentProcessor;
use App\Entity\Application\Taxes;
use App\Entity\Application\Coupons;
use App\Entity\Application\Products;
use App\Form\Application\PurchaseType;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\Application\CalculatePriceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApplicationController extends AbstractController
{
    #[Route('/calculate-price', name: 'calculate-price')]
    public function CalculatePrice(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* class JsonResponse*/
        $response = new JsonResponse;

        /* array for error messages */
        $arr_error = [];

        /*empty variables for displaying the price, coupon, tax*/
        $find_Product = '';
        $find_one_by_coupon = '';
        $find_one_by_tax = '';

        /* array for displaying a list of products with prices */
        $arr_products = $doctrine->getRepository(Products::class)->findAll();

        /* Connecting the form */
        $form_calculate_price = $this->createForm(CalculatePriceType::class);

        $form_calculate_price->handleRequest($request);

        /* Errors validation */
        $errors_calculate_price = $validator->validate($form_calculate_price);

        /*Form validation*/
        if (
            $form_calculate_price->isSubmitted()
        ) {
            if ($form_calculate_price->isValid()) {

                $idProduct = $request->request->all()['calculate_price']['products'];

                $number_coupon = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $request->request->all()['calculate_price']['coupons']
                ));

                $taxe = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $request->request->all()['calculate_price']['taxes']
                ));
                $tax_number = substr($taxe, 0, 2);

                $сount_coupon = $doctrine->getRepository(Coupons::class)
                    ->count(['number_coupon' => $number_coupon]);

                $сount_taxe = $doctrine->getRepository(Taxes::class)
                    ->count(['tax_number' => $tax_number]);

                /*checking numbers in the database*/
                if ($сount_coupon != 0) {

                    $find_one_by_coupon = $doctrine->getRepository(Coupons::class)
                        ->findOneBy(['number_coupon' => $number_coupon]);
                } else {
                    if (!empty($number_coupon)) {
                        $arr_error['coupon'] = 'there is no such number';
                    }
                }
                /*checking numbers in the database*/
                if ($сount_taxe != 0) {

                    $find_one_by_tax = $doctrine->getRepository(Taxes::class)
                        ->findOneBy(['tax_number' => $tax_number]);
                } else {
                    if (!empty($tax_number)) {

                        $arr_error['taxe'] = 'there is no such number';
                    }
                }

                if (empty($arr_error)) {

                    $find_Product = $doctrine->getRepository(Products::class)->find($idProduct);
                } else {
                    $response->setStatusCode(400);
                    if ($arr_error) {
                        foreach ($arr_error as $value) {
                            $message = $value;
                            $response->setData(['error' => $message]);
                        }
                    }
                }
            } else {

                $response->setStatusCode(400);
                if ($errors_calculate_price) {
                    foreach ($errors_calculate_price as $key) {
                        $message = $key->getmessage();
                        $response->setData(['error' => $message]);
                    }
                }
            }
        }

        return $this->render('application/calculate-price.html.twig', [
            'title_logo' => 'Calculate price',
            'legend' => 'Calculate price',
            'legend_response' => 'Response',
            'arr_products' => $arr_products,
            'form_calculate_price' => $form_calculate_price->createView(),
            'form_reset' => $form_calculate_price->createView(),
            'arr_error' => $arr_error,
            'find_Product' => $find_Product,
            'find_one_by_coupon' => $find_one_by_coupon,
            'find_one_by_tax' => $find_one_by_tax,
            'response' => $response,
        ]);
    }


    #[Route('/purchase', name: 'purchase')]
    public function Purchase(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
    ): Response {

        /* class JsonResponse*/
        $response = new JsonResponse;

        /* array for error messages */
        $arr_error = [];

        /*empty variables for displaying the price, coupon, tax*/
        $find_Product = '';
        $find_one_by_coupon = '';
        $find_one_by_tax = '';

        /* array for displaying a list of products with prices */
        $arr_products = $doctrine->getRepository(Products::class)->findAll();

        /* Connecting the form */
        $form_purchase = $this->createForm(CalculatePriceType::class);
        $form_buy = $this->createForm(PurchaseType::class);

        $form_purchase->handleRequest($request);
        $form_buy->handleRequest($request);

        /* Errors validation */
        $errors_purchase = $validator->validate($form_purchase);

        /*Form validation*/
        if (
            $form_purchase->isSubmitted()
        ) {
            if ($form_purchase->isValid()) {

                $idProduct = $request->request->all()['calculate_price']['products'];

                $number_coupon = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $request->request->all()['calculate_price']['coupons']
                ));

                $taxe = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $request->request->all()['calculate_price']['taxes']
                ));
                $tax_number = substr($taxe, 0, 2);

                $сount_coupon = $doctrine->getRepository(Coupons::class)
                    ->count(['number_coupon' => $number_coupon]);

                $сount_taxe = $doctrine->getRepository(Taxes::class)
                    ->count(['tax_number' => $tax_number]);

                /*checking numbers in the database*/
                if ($сount_coupon != 0) {

                    $find_one_by_coupon = $doctrine->getRepository(Coupons::class)
                        ->findOneBy(['number_coupon' => $number_coupon]);
                } else {
                    if (!empty($number_coupon)) {
                        $arr_error['coupon'] = 'there is no such number';
                    }
                }
                /*checking numbers in the database*/
                if ($сount_taxe != 0) {

                    $find_one_by_tax = $doctrine->getRepository(Taxes::class)
                        ->findOneBy(['tax_number' => $tax_number]);
                } else {
                    if (!empty($tax_number)) {

                        $arr_error['taxe'] = 'there is no such number';
                    }
                }

                if (empty($arr_error)) {

                    $find_Product = $doctrine->getRepository(Products::class)->find($idProduct);
                } else {
                    $response->setStatusCode(400);
                    if ($arr_error) {
                        foreach ($arr_error as $value) {
                            $message = $value;
                            $response->setData(['error' => $message]);
                        }
                    }
                }
            } else {

                $response->setStatusCode(400);
                if ($errors_purchase) {
                    foreach ($errors_purchase as $key) {
                        $message = $key->getmessage();
                        $response->setData(['error' => $message]);
                    }
                }
            }
        }

        return $this->render('application/purchase.html.twig', [
            'title_logo' => 'Purchase',
            'legend' => 'Calculate price',
            'legend_purchase' => 'Purchase',
            'legend_response' => 'Response',
            'arr_products' => $arr_products,
            'form_purchase' => $form_purchase->createView(),
            'form_buy' => $form_buy->createView(),
            'arr_error' => $arr_error,
            'find_Product' => $find_Product,
            'find_one_by_coupon' => $find_one_by_coupon,
            'find_one_by_tax' => $find_one_by_tax,
            'response' => $response,
        ]);
    }


    #[Route('/buy', name: 'buy')]
    public function Duy(Request $request, ValidatorInterface $validator): Response
    {

        /* class JsonResponse*/
        $response = new JsonResponse;

        $payment_processor = new StripePaymentProcessor;

        /* Connecting the form */
        $form_buy = $this->createForm(PurchaseType::class);

        $form_buy->handleRequest($request);

        /* Подключаем валидацию  */
        $errors_buy = $validator->validate($form_buy);

        if ($form_buy->isSubmitted()) {

            if ($form_buy->isValid()) {

                $payment_preg_replace = preg_replace(
                    '#[^\d/.,]#',
                    '',
                    $request->request->all()['purchase']['payment']
                );

                $total_amount_preg_replace = preg_replace(
                    '#[^\d/.,]#',
                    '',
                    $request->request->all()['purchase']['total_amount']
                );
                if (!empty($total_amount_preg_replace)) {


                    $percentage_of_payment = (100 / $total_amount_preg_replace) * $payment_preg_replace;


                    $pay = $payment_processor->processPayment($percentage_of_payment);
                    if ($pay && $percentage_of_payment == 100) {
                        $this->addFlash(
                            'payment',
                            'Payment has passed.'
                        );
                    } else {
                        $this->addFlash(
                            'payment',
                            'Incorrect amount.'
                        );
                        $response->setStatusCode(400);
                        $response->setData(['error' => 'Incorrect amount.']);
                        $this->addFlash('response', $response);
                    }
                }

                return $this->redirectToRoute('purchase');
            } else {

                $response->setStatusCode(400);
                /*We record validation errors in the session*/
                if ($errors_buy) {
                    foreach ($errors_buy as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_buy';
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                        $response->setData(['error' => $message]);
                    }
                }

                $this->addFlash('response', $response);

                return $this->redirectToRoute('purchase');
            }
        }
    }

    /* reset function */
    #[Route('/reset', name: 'reset')]
    public function ResetPart(): Response
    {
        return $this->redirectToRoute('calculate-price');
    }
}
