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
use Symfony\Component\Validator\ConstraintViolationListInterface;

class ValidatorData
{
    public function ValidatorRegex(
        $data,
        $pattern,
        $message,
        $key_error
    ): array {
        $validator = Validation::createValidator();

        $error = new Regex(['pattern' => $pattern]);
        $error->message = $message;

        $errors = $validator->validate(
            $data,
            $error
        );

        return $this->countError($errors, $key_error);
    }

    public function countError($errors, $key_error): array
    {
        $arr_error = [];
        if (count($errors) != 0) {
            $arr_error[$key_error] = $errors[0]->getmessage();
        }

        return $arr_error;
    }
}
