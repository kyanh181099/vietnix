<?php
ob_start();

require_once "autoload.php";
require_once "/usr/local/cpanel/php/cpanel.php";
require_once "/usr/local/cpanel/whostmgr/docroot/cgi/vietnixcachePlugin/vendor/autoload.php";
define('MODULE_DIR', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

use tinocachePlugin\Controller\VietnixCacheController;

try
{
    $cpanel = new CPANEL();
    $controller = new VietnixCacheController($cpanel);

    if (filter_input(INPUT_POST, 'ajaxaction'))
    {
        ob_clean();
        header("Content-Type: application/json; charset=UTF-8");
        $response = $controller->execute($_POST);
        echo (is_array($response) || is_object($response)) ? json_encode($response) : $response;
        die;
    }

    echo $cpanel->header('Vietnix Cache');
    $controller->view('vietnixcachePlugin');
    echo $cpanel->footer('vietnixcachePlugin');
}
catch (Exception $ex)
{
    echo "Fatal error: ".$ex->getMessage();
}
