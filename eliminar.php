<?php
include_once ("db.php");
$conexion = conexion();

if( empty($_GET[ 'id'])) {
    header('Location: index.php');
    exit();
}

$id = $_GET["id"];

$sql = $conexion->prepare("SELECT imagen FROM pokemones WHERE idPokemon=:id");
$sql->bindParam(':id', $id);
$sql->execute();
$imagen = $sql->fetch();

if (file_exists("./img/" . $imagen["imagen"])) {
    unlink("./img/" . $imagen["imagen"]);
}

$sql = $conexion->prepare("DELETE FROM pokemones WHERE idPokemon=:id");
$sql->bindParam(':id', $id);
$sql->execute();

header('Location: administrador.php');
exit();



