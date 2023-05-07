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

<div class="w-full p-8">
    <form action="busqueda.php" method="GET" class="flex">

            <input type="text" name="buscador" class="w-3/4 px-4 py-2 rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="Ingrese el nombre, tipo o número de pokémon">
            <button type="submit" class="w-1/4 px-4 py-2 rounded-r-lg bg-gray-800 text-white font-bold tracking-wide hover:bg-gray-700">¿Quien es ese pokemon?</button>

    </form>
</div>


<div  class="flex items-center justify-center" >

    <?php
    foreach ($listaPokemones as $element) {
        echo "<a href='pokemon.php?id=" . $element['idPokemon'] ."'>" . $element['nombre'] . "</a> <br><br>";
        echo "<a href='eliminar.php?id=" . $element['idPokemon'] ."'> x </a> <br><br>";
        echo "<a href='formmodificar.php?id=" . $element['idPokemon'] ."'> m </a> <br><br>";
    }
    ?>
</div>

<div class="flex items-center justify-center" >
    <a href="forminsertar.php"> alta pokemon</a>
</div>

</body>
</html>

