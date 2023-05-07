<?php
include_once ("db.php");
session_start();
error_reporting(0);
$conexion = conexion();

$busqueda = $_GET["buscador"];

$sql = $conexion->prepare("SELECT p.* FROM pokemones  p inner join  tipo t on p.tipo=t.id WHERE p.nombre LIKE '$busqueda' OR t.tipo LIKE '$busqueda' OR  p.numero LIKE '$busqueda'");
$sql->execute();
$listaPokemones = $sql->fetchAll(PDO::FETCH_ASSOC);

if(empty($listaPokemones)) {
    if (!empty($busqueda)) {
        $pokemonNoEncontrado = true;
    }

    $sql = $conexion->prepare("SELECT * FROM pokemones");
    $sql->execute();

    $listaPokemones = $sql->fetchAll(PDO::FETCH_ASSOC);

}
?>

<?php
if (!isset($_SESSION['usuario'])) {
    include_once('header.php');
    if ($pokemonNoEncontrado) {
        ?>
        <div class="w-full flex justify-center">
            <div class="w-1/4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
              <strong class="font-bold">Error!</strong>
              <span class="block sm:inline">Pokemon no encontrado.</span>
            </div>
        </div>
        <?php
    }
    ?>

<div class="relative overflow-x-auto m-16">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Imagen
            </th>
            <th scope="col" class="px-6 py-3">
                Tipo
            </th>
            <th scope="col" class="px-6 py-3">
                Número
            </th>
            <th scope="col" class="px-6 py-3">
                Nombre
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listaPokemones as $pokemon) {
            echo '<tr onclick="window.location=\'detalle.php?id=' . $pokemon['idPokemon'] . '\'" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
            echo '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-24" src="./img/' . $pokemon['imagen'] . '"/>
            </th>
            <td class="px-6 py-4">
                <img src="./img/' . $pokemon['tipo'] . '.png"/>
            </td>
            <td class="px-6 py-4">' . $pokemon['numero'] . '</td>
            <td class="px-6 py-4">' . $pokemon['nombre'] . '</td>
        </tr>';
        }
        ?>
        </tbody>
    </table>
</div>
<?php
    } else {
    include_once('header-administrador.php');
    if ($pokemonNoEncontrado) {
        ?>
        <div class="w-full flex justify-center">
            <div class="w-1/4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">Pokemon no encontrado.</span>
            </div>
        </div>
        <?php
    }
?>
<div class="relative overflow-x-auto m-16">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Imagen
            </th>
            <th scope="col" class="px-6 py-3">
                Tipo
            </th>
            <th scope="col" class="px-6 py-3">
                Número
            </th>
            <th scope="col" class="px-6 py-3">
                Nombre
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Acciones
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listaPokemones as $pokemon) {
            echo '<tr onclick="window.location=\'detalle.php?id=' . $pokemon['idPokemon'] . '\'" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
            echo '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-24" src="./img/' . $pokemon['imagen'] . '"/>
            </th>
            <td class="px-6 py-4">
                <img src="./img/' . $pokemon['tipo'] . '.png"/>
            </td>
            <td class="px-6 py-4">' . $pokemon['numero'] . '</td>
            <td class="px-6 py-4">' . $pokemon['nombre'] . '</td>
            <td class="px-6 py-4 text-center">
                <a href="formmodificar.php?id=' . $pokemon['idPokemon'] . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-6">Modificación</a>
                <a href="eliminar.php?id=' . $pokemon['idPokemon'] . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-6">Baja</a>
            </td>
            </tr>';
        }
        ?>
        </tbody>
    </table>
    <div class="w-full flex justify-center my-6">
        <a href="forminsertar.php"
           class="text-center w-2/5 p-4 bg-blue-500 hover:bg-blue-700 rounded text-white">
            Nuevo pokemon
        </a>
    </div>
</div>
<?php
}
?>







