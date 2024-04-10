<?php

namespace Skmb1987\Ares;

use Skmb1987\Ares\Validator\Ico;

class Ares
{
    const BASE_URL = "https://ares.gov.cz/ekonomicke-subjekty-v-be/rest/ekonomicke-subjekty/";
    public static function getData(string $data):array
    {
        if(!Ico::isValid($data)){
            throw new \Skmb1987\Ares\Exception\InvalidIcoException();
        }

        $source = self::BASE_URL.$data;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $source);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec ($ch);
        $error = curl_error($ch);

        curl_close ($ch);

        if(!empty($error)){
            throw new \Skmb1987\Ares\Exception\ApiException();
        }

        return json_decode($result);
    }
}