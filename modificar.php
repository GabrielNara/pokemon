<?php
include_once ("db.php");

if(
    empty($_POST["numero"]) &&
    empty($_POST['tipo'])&&
    empty($_POST['nombre'])&&
    empty($_POST['descripcion'])) {
    header('Location: administrador.php');
    exit();
}

$conexion = conexion();

$id = $_GET["id"];
$numero = $_POST["numero"];
$tipo = $_POST["tipo"] ;
$nombre = $_POST["nombre"] ;
$descripcion = $_POST["descripcion"] ;

if (!isset($_FILES['imagen'])) {
    $sql = $conexion->prepare("UPDATE pokemones SET numero = :numero , tipo = :tipo, nombre = :nombre, descripcion = :descripcion
where idPokemon = :id" );
} else {
    $archivoImagen = $_FILES['imagen']['tmp_name'];
    $rutaImg = 'img/' . $archivoImagen; /*defino la ruta completa del archivo*/
    $infoImg = pathinfo($rutaImg); /*obtengo toda la infromacion de la imaten*/
    $extension = strtolower($infoImg['extension']); /*obtengo la extension*/
    move_uploaded_file($archivoImagen, "./img/" . $_FILES['imagen']['name']);
    $sql = $conexion->prepare("UPDATE pokemones SET numero = :numero , tipo = :tipo, nombre = :nombre, descripcion = :descripcion, imagen = :imagen 
    where idPokemon = :id");
    $sql->bindParam(':imagen', $_FILES['imagen']['name']);
}

$sql->bindParam(':numero', $numero);
$sql->bindParam(':tipo', $tipo);
$sql->bindParam(':descripcion', $descripcion);
$sql->bindParam(':nombre', $nombre);
$sql->bindParam(':id', $id);

$sql->execute();

header('Location: administrador.php');




