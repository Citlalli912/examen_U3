<?php
session_start();

$usuario = $_POST["user"];
$contraseña = $_POST["pass"];
$email = $_POST["email"];

$conexion = new mysqli("localhost", "root", "", "galeria_2");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$consulta = "SELECT nombre FROM usuarios WHERE nombre='$usuario' AND contrasena='$contraseña'";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    $_SESSION["usuario"] = $usuario;
    header("Location: upload.php");
    exit;
}

$consulta_registro = "INSERT INTO usuarios (nombre, contrasena, email) VALUES ('$usuario', '$contraseña', '$email')";
if ($conexion->query($consulta_registro) === TRUE) {
    echo "Usuario registrado exitosamente";
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

$conexion->close();
?>

