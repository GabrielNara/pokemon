<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>POKEDEX</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="bg-gray-800 text-white py-4 md:py-8 px-4 md:px-8 flex flex-row items-center justify-between">
    <div class="flex items-center w-full md:w-1/3 justify-left">
        <img src="img/pokedex.png">
    </div>

    <div class="w-full md:w-1/3 ">
        <h1 class="text-lg font-bold text-center">
            POKEDEX
        </h1>
    </div>
    <div class="flex items-center w-full md:w-1/3 justify-end">
        <form action="iniciar-sesion.php" method="POST" enctype="multipart/form-data" class="flex flex-wrap">
                <input type="text"
                       class="w-full md:w-1/3 p-4 border border-gray-700 rounded px-1 py-2 bg-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                       name="usuario" placeholder="Usuario" autocomplete="off"/>
                <input type="password"
                       class="w-full md:w-1/3 p-4 border border-gray-700 rounded px-1 py-2 bg-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                       name="contrasena" placeholder="Contraseña" autocomplete="off"/>
                <button type="submit"
                        class="w-full md:w-1/3 p-4 bg-blue-500 hover:bg-blue-700 rounded text-white px-4 py-2">
                    Ingresar
                </button>
        </form>
    </div>
</div>

</body>

</html>
