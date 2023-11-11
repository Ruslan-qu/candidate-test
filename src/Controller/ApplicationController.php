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
        /* Подключаем сущности  */
        $entity_products = new Products();
        $entity_coupons = new Coupons();
        $entity_taxes = new Taxes();


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
            dd($taxe);
       
            $сount_coupon = $doctrine->getRepository(Coupons::class)
                ->count(['number_coupon' => $number_coupon]);

            /* Валидация дулей номеров деталей, сохранения номера , производителей, описания деталей */
            if ($сount_coupon != 0) {

                $find_product = $doctrine->getRepository(Products::class)->find($idProduct);

                $find_one_by_coupon = $doctrine->getRepository(Coupons::class)
                ->findOneBy(['number_coupon' => $number_coupon]);

                $find_one_by_coupon = $doctrine->getRepository(Taxes::class)
                ->findOneBy(['part_numbers' => $part_number_strtolower_preg_replace]);


                /*$entity_part_no->setNameDetails(
                mb_strtolower(preg_replace(
                    '#[^а-яё\d\s\.,]#ui',
                    '',
                    $request->request->all()['part_no']['name_details']
                ));

                $em = $doctrine->getManager();
                $em->persist($entity_part_no);
                $em->flush();*/
            }else{
                $
            }

            $id_part_number_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->findOneBy(['part_numbers' => $part_number_strtolower_preg_replace]);

            $entity_incoming_documents->setIdDetails($id_part_number_manufacturer);

            $entity_incoming_documents->setIdManufacturer($id_part_number_manufacturer);

            /*$entity_incoming_documents->setIdNameDetail($id_part_number_manufacturer);*/

            /*  $entity_incoming_documents->setNumberDocument(
                $request->request->all()['incoming_documents']['number_document']
            );

            $entity_incoming_documents->setDataInvoice(
                new DateTime($request->request->all()['incoming_documents']['data_invoice'])
            );

            $entity_incoming_documents->setQuantity(
                $request->request->all()['incoming_documents']['quantity']
            );

            $price = $request->request->all()['incoming_documents']['price'];
            if (strpos($price, ',')) {
                $strPriceReplace = str_replace(',', '.', $price);
                $entity_incoming_documents->setPrice($strPriceReplace * 100);
            } else {
                $entity_incoming_documents->setPrice($price * 100);
            }



            $entity_incoming_documents->setSales(1);
            $entity_incoming_documents->setRefund(1);

            $em = $doctrine->getManager();
            $em->persist($entity_incoming_documents);
            $em->flush();

            return $this->redirectToRoute('incoming_documents');*/
        } /*else {

             Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
        /*  $value_form_incoming_documents_and_part_no = $request->request->all();
            if ($value_form_incoming_documents_and_part_no) {
                foreach ($value_form_incoming_documents_and_part_no as $key => $values) {
                    if (is_iterable($values)) {
                        foreach ($values as $key => $value) {
                            $this->addFlash($key, $value);
                        }
                    }
                }
            }

            /* Выводим ошибки валидации, через сессии */
        /* if ($errors_incoming_documents) {
                foreach ($errors_incoming_documents as $key) {
                    $message = $key->getmessage();
                    $propertyPath = $key->getpropertyPath();
                    $this->addFlash(
                        $propertyPath,
                        $message
                    );
                }
            }

            if ($errors_part_no) {
                foreach ($errors_part_no as $key) {
                    $message = $key->getmessage();
                    $propertyPath = $key->getpropertyPath();
                    $this->addFlash(
                        $propertyPath,
                        $message
                    );
                }
            }

            return $this->redirectToRoute('incoming_documents');
        }*/



        return $this->render('application/calculate-price.html.twig', [
            'title_logo' => 'Calculate price',
            'legend' => 'Calculate price',
            'form_calculate_price' => $form_calculate_price->createView(),
        ]);
    }


    #[Route('/purchase', name: 'purchase')]
    public function Purchase(): Response
    {
        return $this->render('application/purchase.html.twig', [
            'title_logo' => 'Purchase',
        ]);
    }
}
