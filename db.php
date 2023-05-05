<?php

function conexion(): PDO
{
    $host = "localhost:3306";
    $db = "pokemon";
    $usuario = "root";
    $contrasenia = "";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$db", $usuario, $contrasenia);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

    return $conexion;
}
