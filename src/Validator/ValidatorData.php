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



class ValidatorData
{
    public function ValidatorRegex($data, $pattern, $message, $key_eroor): array
    {
        $validator = Validation::createValidator();

        $error = new Regex(['pattern' => $pattern]);

        $error->message = $message;

        $errors = $validator->validate(
            $data,
            $error
        );

        $error_data[$key_eroor] = $errors[0]->getmessage();


        return $error_data;
    }
}
