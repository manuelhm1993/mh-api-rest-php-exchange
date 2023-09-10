<?php

require_once __DIR__."/config/variables-conexion.php";
require_once __DIR__."/database/globals.php";
require_once __DIR__."/database/request.php";

if(isset($_GET['divisa'])) {
    switch($_GET['divisa']) {
        case 'euro':
            $selectDivisa('euro');
            break;
        case 'dolar':
            $selectDivisa('dolar');
                break;
        default:
            echo json_encode(['error' => 'Url no válida']);
            break;
    }
}
