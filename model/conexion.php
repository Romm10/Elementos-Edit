<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'randy1234';
// Base de datos incial
// $db_db = 'information_schema';
$db_db = 'proyecto';

$mysqli = @new mysqli(
                $db_host,
                $db_user,
                $db_password,
                $db_db
);

//if ($mysqli->connect_error) {
//    echo 'La conexión a la base de datos de MYSQL No es correcta.';
//    echo 'Errno: ' . $mysqli->connect_errno;
//    echo '<br>';
//    echo 'Error: ' . $mysqli->connect_error;
//    exit();
//}else{
//    
//    echo"conexion exitosa";
//}
//
//echo 'La conexión a la base de datos de MYSQL FUE EXITOSA.';
//
//echo '<br>';
//echo 'Host information: ' . $mysqli->host_info;
//echo '<br>';
//echo 'Protocol version: ' . $mysqli->protocol_version;

// $mysqli->close();
?>