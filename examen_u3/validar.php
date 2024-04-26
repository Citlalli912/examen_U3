<?php
session_start();

if(isset($_POST["ID_usuario"])) {
    $id_usuario = $_POST["ID_usuario"];
    $usuario = $_POST["user"];
    $contraseña = $_POST["pass"];
    $email = $_POST["email"];

    $conexion = new mysqli("localhost", "root", "", "galeria");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $consulta_actualizar = "UPDATE usuarios SET nombre='$usuario', contrasena='$contraseña', email='$email' WHERE id='$id_usuario'";

    if ($conexion->query($consulta_actualizar) === TRUE) {
        echo "Datos actualizados exitosamente";
    } else {
        echo "Error al actualizar datos: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "Error: No se recibió el ID de usuario correctamente.";
}
?>

