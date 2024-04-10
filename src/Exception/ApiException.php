<?php

namespace Skmb1987\Ares\Exception;

class ApiException extends \Exception
{

    public function __construct()
    {
        parent::__construct('Problem komunikacie s Api');
    }
}