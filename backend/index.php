<?php

use App\Classes\Helper;
use App\Models\Conversor;

require_once './config/autoload.php';

Helper::requireDotenv();

$apiKey = $_ENV['API_EXCHANGERATE_KEY'];

echo Conversor::getConversion('dolar', 'euro', 1);
