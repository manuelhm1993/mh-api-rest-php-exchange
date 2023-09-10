<?php

use App\Classes\Helper;

require_once './config/autoload.php';

Helper::requireDotenv();

$apiKey = $_ENV['API_EXCHANGERATE_KEY'];

echo $apiKey;
