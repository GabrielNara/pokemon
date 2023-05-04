<?php
include_once ("db.php");
include_once ("functions.php");

$conexion = conexion();

$busqueda = $_GET["buscador"];

$sql = $conexion->prepare("SELECT * FROM pokemones WHERE nombre LIKE '$busqueda' OR tipo LIKE '$busqueda' OR  numero LIKE '$busqueda'");
$sql->execute();

$pokemones = $sql->fetchAll(PDO::FETCH_ASSOC);

//var_dump($pokemones);
