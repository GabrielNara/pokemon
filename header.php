<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>POKEDEX</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="CSS/estilos.css">

</head>
<body>

<div class="bg-gray-800 text-white p-2 md:flex md:flex-row md:items-center md:justify-between">
    <div class="flex w-full md:w-3/5">
        <div class="flex items-center w-1/2">
            <a href="index.php">
                <img src="img/pokedex.png" class="w-24">
            </a>
        </div>
        <div class="w-1/2">
            <a href="index.php">
                <h1 class="text-5xl text-center custom-font p-6">
                    Pokedex
                </h1>
            </a>
        </div>
    </div>
    <div class="flex items-center w-full md:w-2/5 justify-center md:justify-end">
        <form action="iniciar-sesion.php" method="POST" enctype="multipart/form-data" class="flex flex-wrap">
                <input type="text"
                       class="w-full h-7 md:w-1/3 border border-gray-700 rounded px-1 py-2 bg-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                       name="usuario" placeholder="Usuario" autocomplete="off"/>
                <input type="password"
                       class="w-full h-7 md:w-1/3 border border-gray-700 rounded px-1 py-2 bg-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                       name="contrasena" placeholder="Contraseña" autocomplete="off"/>
                <button type="submit"
                        class="w-full h-7 md:w-1/3 bg-blue-500 hover:bg-blue-700 rounded text-white">
                    Ingresar
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
