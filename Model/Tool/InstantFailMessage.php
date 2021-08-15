<?php

namespace vietnixcachePlugin\Model\Tool;

use vietnixcachePlugin\View\View;

class InstantFailMessage
{

    public static function create($message)
    {
        Logger::debug($message);

        var_dump($message);
    }
}
