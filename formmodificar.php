<?php
include_once ('db.php');
include_once ('header-administrador.php');

$conexion = conexion();

$id = $_GET['id'];
$sql = $conexion->prepare("SELECT * FROM pokemones WHERE idPokemon=:id");
$sql->bindParam(':id', $id);
$sql->execute();
$datosPokemon = $sql->fetch(PDO::FETCH_ASSOC);
?>

<html>
<body>
<div class="w-full flex justify-center">
    <form method="post" action="modificar.php?id=<?php echo $id; ?>" class="w-1/2 " >
        <div class="relative z-0 w-full mb-6 group">
            <input value="<?php echo $datosPokemon["numero"] ?>" type="text" name="numero" id="numero" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="numero" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo</label>
            <select name="tipo" id="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option disabled value="">Seleccionar tipo</option>
                <?php
                    $sql = $conexion->prepare("SELECT * FROM tipo;");
                    $sql->execute();
                    $tipo = $sql->fetchAll(PDO::FETCH_ASSOC);

                    for($i = 0; $i < count($tipo); $i++) {
                        if ($tipo[$i]["id"] == $datosPokemon["tipo"]) {
                            echo '<option selected value="' . ($i+1) . '">' . $tipo[$i]["tipo"] . '</option>';
                        } else {
                            echo '<option value="' . ($i+1) . '">' . $tipo[$i]["tipo"] . '</option>';
                        }
                    }
                ?>
            </select>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input value="<?php echo $datosPokemon["nombre"] ?>" type="text" name="nombre" id="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input value="<?php echo $datosPokemon["descripcion"] ?>" type="text" name="descripcion" id="descripcion" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="descripcion" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripción</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="file" name="imagen" id="imagen" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <span name="old" value="<?=$datosPokemon["imagen"]?>"><?php echo $datosPokemon["imagen"]?></span>
            <label for="imagen" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Imagen</label>
        </div>
        <div class="text-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-1/2 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modificar</button>
        </div>
    </form>
</div>
</body>
</html>
