<?php

$divisa = $_GET['divisa'];

$datos = [
    'dolar' => 40,
    'euro'  => 45,
];

echo json_encode($divisa);
