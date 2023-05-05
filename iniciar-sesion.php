<?php
include_once ('db.php');

$conexion = conexion();

if ($_POST) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena;");
    $sql->bindParam(':usuario', $usuario);
    $sql->bindParam(':contrasena', $contrasena);
    $sql->execute();

    if ($sql->fetch()) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: administrador.php');
        exit();
    } else {
        ?>
        <script>
            alert("Acceso denegado.\nUsuario o contraseña incorrectos.");
        </script>
        <?php
    }
}