<?php

// Devuelve el substring del directorio raíz eliminando las subcarpetas: strlen(directorio) + 1 = \config = 7
$dir = substr(__DIR__, 0, -7);

// Requerir el autoload
require_once $dir . '/vendor/autoload.php';
