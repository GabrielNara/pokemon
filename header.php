
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POKEDEX</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="container">

    <h1>POKEDEX</h1>

    <form action="functions.php" method="POST" enctype="multipart/form-data">

        <div class="flex items-center justify-center">
            <input type="text"
                   class="border border-solid border-[#12121230] shadow-sm hover:shadow-md duration-200 w-80 my-2 p-3 focus:outline-none"
                   name="usuario" placeholder="Usuario" autocomplete="off"/>
            <input type="password"
                   class="border border-solid border-[#12121230] shadow-sm hover:shadow-md duration-200 w-80 my-2 p-3 focus:outline-none"
                   name="contrasena" placeholder="Contraseña" autocomplete="off"/>
            <button type="submit"
                    class="border border-solid border-[#12121230] focus:shadow-md hover:bg-[#333652] hover:text-white duration-200 w-80 p-3 my-2">
                Iniciar sesión
            </button>
        </div>
    </form>


</div>

</body>

</html>
