<?php

namespace vietnixcachePlugin\Model\Api\Whm\Factory;

use vietnixcachePlugin\Model\Api\ResponseValidator;
use vietnixcachePlugin\Model\Api\Whm\Validator\ResultValidator;
use vietnixcachePlugin\Model\Api\Whm\Validator\EndpointValidator;
use vietnixcachePlugin\Model\Api\Whm\Validator\AuthenticationValidator;

class ValidatorFactory
{
    public static function createResponseValidator()
    {
        $validators = [];

        $validators[] = new EndpointValidator();
        $validators[] = new AuthenticationValidator();
        $validators[] = new ResultValidator();

        return new ResponseValidator( $validators );
    }
}