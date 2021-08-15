<?php

namespace vietnixcachePlugin\Model\Api;

abstract class AbstractDetailsProvider
{
    abstract function getAuthkey();
    
    abstract function getEndpoint();
}