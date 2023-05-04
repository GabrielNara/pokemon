<?php

include_once ("functions.php");

if(
    empty($_POST["numero"]) &&
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
$id = $_GET["id"];

$sql = $conexion->prepare("UPDATE pokemones SET numero = :numero , tipo = :tipo, nombre = :nombre, descripcion = :descripcion, imagen = :imagen 
where idPokemon = :id" );

$sql->bindParam(':numero', $numero);
$sql->bindParam(':tipo', $tipo);
$sql->bindParam(':descripcion', $descripcion);
$sql->bindParam(':nombre', $nombre);
$sql->bindParam(':imagen', $imagen);
$sql->bindParam(':id', $id);

$sql->execute();


redirect('index.php?message=alta');




