<?php
include_once ('db.php');

$conexion = conexion();

$numero = $_POST["numero"];
$tipo = $_POST["tipo"];
$nombre = $_POST["nombre"] ;
$descripcion = $_POST["descripcion"] ;

$archivoImagen = $_FILES['imagen']['tmp_name'];

$rutaImg = 'img/' . $archivoImagen; /*defino la ruta completa del archivo*/
$infoImg = pathinfo($rutaImg); /*obtengo toda la infromacion de la imaten*/
$extension = strtolower($infoImg['extension']); /*obtengo la extension*/
move_uploaded_file($archivoImagen, "./img/" .  $_FILES['imagen']['name']);

$sql = $conexion->prepare("INSERT INTO pokemones ( `numero`, `tipo`, `nombre`, `descripcion`, `imagen`) 
VALUES(:numero,:tipo,:nombre,:descripcion,:imagen) " );
$sql->bindParam(':numero', $numero);
$sql->bindParam(':tipo', $tipo);
$sql->bindParam(':descripcion', $descripcion);
$sql->bindParam(':nombre', $nombre);
$sql->bindParam(':imagen', $_FILES['imagen']['name']);

$sql->execute();

header("Location: administrador.php");
exit();