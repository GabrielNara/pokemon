<?php
include_once ('db.php');

$conexion = conexion();

$id = $_GET['id'];
$sql = $conexion->prepare("SELECT * FROM pokemones WHERE idPokemon=:id");
$sql->bindParam(':id', $id);
$sql->execute();
$datosPokemon = $sql->fetch(PDO::FETCH_ASSOC);
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

<div class="bg-gray-800 text-white py-2 px-2 flex flex-row items-center justify-between">

    <div class="flex items-center w-full md:w-1/3 justify-left">
        <img src="img/pokedex.png" class="w-24">
    </div>

    <div class="w-full md:w-1/3 ">
        <h1 class="text-5xl text-center custom-font p-6">
            Pokedex
        </h1>
    </div>
    <div class="flex items-center w-full md:w-1/3 justify-end">

    </div>
</div>
<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 p-4">
        <img class="w-[512px] border border-solid border-[#12121230] shadow-md mx-auto mt-8" src="./img/<?php echo $datosPokemon["imagen"] ?>" alt="Imagen del Pokemon" class="w-full">
    </div>
    <div class="w-full md:w-1/3 p-4 border border-solid border-[#12121230] shadow-md mx-auto mt-8 ">
        <h1 class="text-3xl font-bold mb-2 flex items-center"><img src="./img/<?php echo $datosPokemon["tipo"] ?>.png" alt="Pokemon Logo" class="mr-4"><?php echo $datosPokemon["nombre"] ?></h1>
        <p class="text-lg mb-4"><?php echo $datosPokemon["descripcion"] ?></p>
    </div>
</div>


</body>
