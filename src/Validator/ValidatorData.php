<?php

namespace App\Validator;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Regex;

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
