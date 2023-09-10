<?php

require_once __DIR__."/config/variables-conexion.php";
require_once __DIR__."/database/globals.php";
require_once __DIR__."/database/request.php";

// Volver el archivo php a un archivo JSON
header("Content-Type: application/json");

// Los navegadores por seguridad bloquean algunas peticiones (cors), esto permite el acceso
header('Access-Control-Allow-Origin: *');

if(isset($_GET['divisa'])) {
    switch($_GET['divisa']) {
        case 'euro':
            $selectDivisa($_GET['divisa']);
            break;
        case 'dolar':
            $selectDivisa($_GET['divisa']);
                break;
        default:
            echo json_encode(['error' => 'Url no válida']);
            break;
    }
}
