<?php

namespace App\Classes;

use Dotenv\Dotenv;

class Helper {
    private static function getDir(): string {
        // Devuelve el substring del directorio raíz eliminando las subcarpetas: strlen(directorio) + 1 = \app\Classes = 12
        return substr(__DIR__, 0, -12);
    }

    public static function requireDotenv() {
        $dir = self::getDir();
        require_once $dir . '/vendor/autoload.php';

        // Carga la ruta del archivo .env
        $dotenv = Dotenv::createImmutable($dir);
        $dotenv->load();
    }
}