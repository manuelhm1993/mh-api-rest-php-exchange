<?php

use App\Classes\Helper;
use App\Routes\Api;

require_once './config/autoload.php';

Helper::requireDotenv();

$apiKey = $_ENV['API_EXCHANGERATE_KEY'];

if(isset($_GET['action'])) {
    $action = $_GET['action'];
    $from   = $_GET['from'];
    $to     = $_GET['to'];
    $amount = $_GET['amount'];

    Api::getData($action, $from, $to, $amount);
}
else {
    echo "API MHenriquez";
}