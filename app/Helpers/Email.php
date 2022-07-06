<?php

namespace App\Helpers;

class Email
{

    public static function validate($email)
    {
        $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
        return $result;
    }
}
