<?php

use App\Classes\Helper;

require_once __DIR__ . '/vendor/autoload.php';

Helper::requireDotenv();

$apiKey = $_ENV['API_EXCHANGERATE_KEY'];

echo $apiKey;
