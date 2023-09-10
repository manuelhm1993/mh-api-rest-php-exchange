<?php

$selectDivisa = function(string $request) use ($link, $user, $password, $cerrarConexiones) {
    try {
        $pdo = new PDO($link, $user, $password);
    
        // ---------------- Hacer una consulta a la tabla de divisa seleccionada
        $sql = "SELECT * FROM $request";
    
        $stm = $pdo->prepare($sql);
        $stm->execute();
    
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    } 
    catch (PDOException $e) {
        $result = $e->getMessage();
    }
    finally {
        $cerrarConexiones($pdo, $stm);
    }

    // Forma de devolver un JSON con vanilla php
    echo json_encode($result);
};

