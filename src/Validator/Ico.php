<?php

namespace Skmb1987\Ares\Validator;

class Ico
{

   public static function isValid(string $data):bool
   {
       if (!preg_match('#^\d{8}$#', $data)) {
           return false;
       }

       $a = 0;
       for ($i = 0; $i < 7; $i++) {
           $a += $data[$i] * (8 - $i);
       }

       $a = $a % 11;
       if ($a === 0) {
           $c = 1;
       } elseif ($a === 1) {
           $c = 0;
       } else {
           $c = 11 - $a;
       }
       return (int) $data[7] === $c;
   }
}