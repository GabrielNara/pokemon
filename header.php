<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>POKEDEX</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="bg-gray-800 text-white py-2 px-2 flex flex-row items-center justify-between">
    <div class="flex items-center w-full md:w-1/3 justify-left">
        <img src="img/pokedex.png">
    </div>

    <div class="w-full md:w-1/3 ">
        <h1 class="text-4xl font-bold text-center">
            POKEDEX
        </h1>
    </div>
    <div class="flex items-center w-full md:w-1/3 justify-end">
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
