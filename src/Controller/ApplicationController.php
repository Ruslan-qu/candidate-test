<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApplicationController extends AbstractController
{
    #[Route('/calculate-price', name: 'calculate-price')]
    public function CalculatePrice(): Response
    {
        return $this->render('application/calculate-price.html.twig', [
            'title_logo' => 'Calculate price',
            'legend' => 'Calculate price',
            'form_search' => $form_search_invoice->createView(),
            'arr_incoming_documents' => $arr_incoming_documents,
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
