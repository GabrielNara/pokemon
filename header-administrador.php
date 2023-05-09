<?php
include_once('db.php');

$conexion = conexion();

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

$sql = $conexion->prepare("SELECT usuario FROM usuarios");
$sql->execute();
$usuario = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>POKEDEX</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="bg-gray-800 text-white p-2 md:flex md:flex-row md:items-center md:justify-between">
    <div class="flex w-full md:w-3/5">
       <div class="flex items-center w-1/2">
           <a href="administrador.php">
               <img src="img/pokedex.png" class="w-24">
           </a>
       </div>
        <div class="w-1/2">
            <a href="administrador.php">
                <h1 class="text-5xl text-center custom-font p-6">
                    Pokedex
                </h1>
            </a>
        </div>
    </div>
    <div class="flex items-center w-full md:w-2/5 justify-center md:justify-end">
        <p class="m-4 font-bold text-white"><?php echo $usuario["usuario"]; ?></p>
        <form action="cerrar-sesion.php" method="POST" enctype="multipart/form-data" class="flex flex-wrap">
            <button type="submit"
                    class="w-40 m-4 p-4 bg-blue-500 h-7 hover:bg-blue-700 rounded text-white px-1 py-1">
                Cerrar sesión
            </button>
        </form>
    </div>
</div>

<div class="w-full p-8">
    <form action="busqueda.php" method="GET" class="flex">
        <input type="text" name="buscador" class="w-3/4 px-4 py-2 rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="Ingrese el nombre, tipo o número de pokémon">
        <button type="submit" class="w-1/4 px-4 py-2 rounded-r-lg bg-gray-800 text-white font-bold tracking-wide hover:bg-gray-700">¿Quién es ese pokemon?</button>
    </form>
</div>
