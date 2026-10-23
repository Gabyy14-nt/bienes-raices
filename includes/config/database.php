<?php


function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');
    // $db = mysqli_connect('localhost', 'root', 'Admin123', 'bienesraices_crud', 3305);
    
    if(!$db) {
        echo "Error, no se pudo conectar.";
        exit;
    }

    return $db;
}