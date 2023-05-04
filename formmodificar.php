<?php
include_once ('db.php');

$conexion = conexion();

$id = $_GET['id'];
$sql = $conexion->prepare("SELECT * FROM pokemones WHERE idPokemon=:id");
$sql->bindParam(':id', $id);
$sql->execute();
$datosPokemon = $sql->fetch(PDO::FETCH_ASSOC);

?>

<html>
<body>
<h1>Pokemones</h1>

<div>
    <form method="post" action="modificar.php?id=<?php echo $id; ?>" >
        <div>
            <label for="numero">Numero</label>
            <input type="text" name="numero" placeholder="1" value="<?php echo $datosPokemon["numero"] ?>"/>
        </div>
        <div>
            <label for="tipo">tipo</label>
            <input type="text" name="tipo" placeholder="fuego"  value="<?php echo $datosPokemon["tipo"] ?>"/>
        </div>
        <div>
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" placeholder="charmander"  value="<?php echo $datosPokemon["nombre"] ?>"/>
        </div>
        <div>
            <label for="descripcion">descripcion</label>
            <input type="text" name="descripcion" placeholder="usa fuego"  value="<?php echo $datosPokemon["descripcion"] ?>"/>
        </div>
        <div>
            <label for="imagen">imagen</label>
            <input type="text" name="imagen" placeholder="pepe.jpg"  value="<?php echo $datosPokemon["imagen"] ?>"/>
        </div>

        <button type="submit" >Modificar</button>

    </form>
</div>
</body>
</html>
