<html>
<body>
    <h1>Pokemones</h1>

     <div>
         <form method="post" action="insertar.php" >
             <div>
             <label for="numero">Numero</label>
             <input type="text" name="numero" placeholder="1"/>
             </div>
             <div>
             <label for="tipo">tipo</label>
             <input type="text" name="tipo" placeholder="fuego"/>
             </div>
             <div>
             <label for="nombre">nombre</label>
             <input type="text" name="nombre" placeholder="charmander"/>
             </div>
             <div>
             <label for="descripcion">descripcion</label>
             <input type="text" name="descripcion" placeholder="usa fuego"/>
             </div>
             <div>
             <label for="imagen">imagen</label>
             <input type="text" name="imagen" placeholder="pepe.jpg"/>
             </div>

             <button type="submit" >Crear</button>

         </form>
     </div>
</body>
</html>
