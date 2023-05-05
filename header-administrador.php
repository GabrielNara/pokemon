<?php
include_once('db.php');

$conexion = conexion();

//if (!isset($_SESSION['usuario'])) {
//    header('Location: index.php');
//    exit();
//}


$sql = $conexion->prepare("SELECT usuario FROM usuarios");
$sql->execute();
$usuario = $sql->fetch(PDO::FETCH_ASSOC);
?>

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
        <p class="m-4 font-bold text-white"><?php echo $usuario["usuario"]; ?></p>
        <form action="cerrar-sesion.php" method="POST" enctype="multipart/form-data" class="flex flex-wrap">
            <button type="submit"
                    class="w-40 m-4 p-4 bg-blue-500 hover:bg-blue-700 rounded text-white px-4 py-2">
                Cerrar sesión
            </button>
        </form>
    </div>
</div>

</body>

</html>
