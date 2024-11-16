<?php
function conectarDB() : mysqli{
    $db = new mysqli( 'localhost', 'root', 'juako1998', 'bienesraices_crud'); 
       // $db->set_charset('UTF-8');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}