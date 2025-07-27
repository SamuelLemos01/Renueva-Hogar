<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$telefono = $_POST['telefono'];
$tipo_documento = $_POST['tipo_documento'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios (nombre_completo, telefono, tipo_documento, documento, direccion, correo, contrasena) VALUES ('$nombre_completo', '$telefono', '$tipo_documento', '$documento', '$direccion', '$correo', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar) {
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../pages/login.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error al registrar usuario: ' . mysqli_error($conexion) . '");
            window.location = "../pages/register.php";
        </script>
    ';
}

mysqli_close($conexion);

?>