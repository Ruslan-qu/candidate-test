<?php

namespace App\Controller;

use App\Entity\Taxes;
use App\Entity\Coupons;
use App\Entity\Products;
use App\Form\CalculatePriceType;
use Doctrine\Persistence\ManagerRegistry;
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

        /* array for error messages */
        $arr_error = [];

        /* array for displaying the coupon price and tax 

        $arr_calculate = [];*/

        /*empty variables for displaying the price, coupon, tax*/
        $find_Product = '';
        $find_one_by_coupon = '';
        $find_one_by_tax = '';

        /* Подключаем сущности  */
        $entity_products = new Products();
        $entity_coupons = new Coupons();
        $entity_taxes = new Taxes();

        /* array for displaying a list of products with prices */
        $arr_products = $doctrine->getRepository(Products::class)->findAll();

        /* Подключаем форм */
        $form_calculate_price = $this->createForm(CalculatePriceType::class);

        $form_calculate_price->handleRequest($request);

        /* Подключаем валидацию  */
        $errors_calculate_price = $validator->validate($form_calculate_price);

        /*Валидация формы ручного сохранения счет-фактур , номера , производителей, описания деталей */
        if (
            $form_calculate_price->isSubmitted() && $form_calculate_price->isValid()
        ) {

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
            //dd($tax_number);

            $сount_coupon = $doctrine->getRepository(Coupons::class)
                ->count(['number_coupon' => $number_coupon]);

            $сount_taxe = $doctrine->getRepository(Taxes::class)
                ->count(['tax_number' => $tax_number]);
            //dd(!empty($tax_number));

            /*  */
            if ($сount_coupon != 0) {
                // dd($number_coupon);
                $find_one_by_coupon = $doctrine->getRepository(Coupons::class)
                    ->findOneBy(['number_coupon' => $number_coupon]);
            } else {
                if (!empty($number_coupon)) {
                    $arr_error['coupon'] = 'there is no such number';
                }
            }

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
            }
        }


        //dd($arr_calculate);

        return $this->render('application/calculate-price.html.twig', [
            'title_logo' => 'Calculate price',
            'legend' => 'Calculate price',
            'arr_products' => $arr_products,
            'form_calculate_price' => $form_calculate_price->createView(),
            'form_reset' => $form_calculate_price->createView(),
            'arr_error' => $arr_error,
            'find_Product' => $find_Product,
            'find_one_by_coupon' => $find_one_by_coupon,
            'find_one_by_tax' => $find_one_by_tax,
        ]);
    }


    #[Route('/purchase', name: 'purchase')]
    public function Purchase(): Response
    {
        return $this->render('application/purchase.html.twig', [
            'title_logo' => 'Purchase',
        ]);
    }


    /* функция сброса */
    #[Route('/reset', name: 'reset')]
    public function ResetPart(): Response
    {
        return $this->redirectToRoute('home_page');
    }
}
