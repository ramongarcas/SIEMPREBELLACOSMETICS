<?php

    $serverName = "RAMONSON-LAPTOP\SQLSERVERDEV";
    $user = "sa";
    $pass = "admin1997";
    $databaseName = "SBC";

    try {
        $data_base = new PDO("sqlsrv:server=$serverName;database=$databaseName",$user,$pass);
        $data_base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa.";
    }catch(Exception $e){
        echo "Ocurrió un problema con la conexión a la base de datos: " . $e->getMessage();
    }
?>