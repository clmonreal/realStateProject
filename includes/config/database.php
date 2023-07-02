<?php 

function conectarDB() : mysqli {
    // $db = new mysqli('localhost', 'id20989568_carlos_lopez', 'Carlangas1*', 'id20989568_real_state_data_basae');

    $db = new mysqli('localhost', 'root', '123456789', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}