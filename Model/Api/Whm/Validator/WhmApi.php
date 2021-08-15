<?php

namespace vietnixcachePlugin\Model\Api\Whm;

use vietnixcachePlugin\Model\Api\AbstractApi;
use vietnixcachePlugin\Model\Api\Whm\Factory\ValidatorFactory;

abstract class WhmApi extends AbstractApi
{
    public function __construct()
    {
        parent::__construct( 
            new WhmDetailsProvider(), 
            ValidatorFactory::createResponseValidator(), 
            new WhmCurl()
        );
    }
}