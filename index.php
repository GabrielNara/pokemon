<?php
include_once ('functions.php');
include_once ('header.php');

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
</head>
<body>

<div  class="flex items-center justify-center">

    <form action="busqueda.php" method="get" >

        <input type="text" name="buscador"
               class="border border-solid border-[#12121230] shadow-sm hover:shadow-md duration-200 w-80 my-2 p-3 focus:outline-none"
        >

        <button type="submit" >buscar</button>
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

