<?php

namespace App\Routes;

use App\Controllers\ConversorController;

class Api {
    public static function getData($url, $from = null, $to = null, $amount = null) {
        switch($url) {
            case 'conversion':
                echo ConversorController::getConversion($from, $to, $amount);
                break;
        }
    }
}