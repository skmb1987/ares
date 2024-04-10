<?php

namespace Skmb1987\Ares\Exception;

class InvalidIcoException extends \Exception
{

    public function __construct()
    {
        parent::__construct('Nespravne ico');
    }
}