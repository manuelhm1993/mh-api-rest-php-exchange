<?php

namespace App\Models;

class Conversor {
    public static function getConversion($from, $to, $amount = null) {
        $data = [$from => ($amount * 10), $to => ($amount * 12)];

        return json_encode($data);
    }
}