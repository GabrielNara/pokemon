<?php
include_once ("functions.php");

if( empty($_POST["numero"]) &&
    empty($_POST['tipo'])&&
    empty($_POST['nombre'])&&
    empty($_POST['descripcion'])&&
    empty($_POST['imagen'])) {
    redirect('index.php');
}

$conexion = conexion();

$numero = $_POST["numero"];
$tipo = $_POST["tipo"] ;
$nombre = $_POST["nombre"] ;
$descripcion = $_POST["descripcion"] ;
$imagen = $_POST["imagen"] ;

$sql = "INSERT INTO `pokemones` ( `numero`, `tipo`, `nombre`, `descripcion`, `imagen`)
    VALUES('$numero','$tipo','$nombre','$descripcion','$imagen')";



$sql = $conexion->prepare("INSERT INTO pokemones ( `numero`, `tipo`, `nombre`, `descripcion`, `imagen`) 
VALUES(:numero,:tipo,:nombre,:descripcion,:imagen) " );
$sql->bindParam(':numero', $numero);
$sql->bindParam(':tipo', $tipo);
$sql->bindParam(':descripcion', $descripcion);
$sql->bindParam(':nombre', $nombre);
$sql->bindParam(':imagen', $imagen);

$sql->execute();


redirect('index.php?message=alta');


