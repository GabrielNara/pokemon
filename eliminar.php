<?php
include_once ("functions.php");

if( empty($_GET[ 'id'])) {
    redirect('index.php');
}
$conexion = conexion();

$id = $_GET["id"];

$sql = $conexion->prepare("DELETE FROM pokemones WHERE idPokemon=:id");
$sql->bindParam(':id', $id);
$sql->execute();


redirect('index.php?message=baja');



