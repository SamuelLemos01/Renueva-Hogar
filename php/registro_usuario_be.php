<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios (nombre_completo, telefono, direccion, correo, contrasena) VALUES ('$nombre_completo', '$telefono', '$direccion', '$correo', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../login.php";
        </script>
    ';
}

mysqli_close($conexion);

?>