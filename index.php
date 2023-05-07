<?php
include_once ('db.php');

$conexion = conexion();

$sql = $conexion->prepare("SELECT * FROM pokemones");
$sql->execute();
$listaPokemones = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
if(!empty($_GET['message'])){
    $message =$_GET['message'];
    switch ($message){
        case "alta":
            echo "Pokemon dado de alta";
            break;
        case "baja":
            echo "Pokemon dado de baja";
            break;

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POKEDEX</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
include_once ('header.php');
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
            echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
</body>
</html>

