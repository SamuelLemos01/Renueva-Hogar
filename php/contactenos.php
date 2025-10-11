<?php

include 'conexion_contactenos_be.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO contactos (nombre_completo, email, telefono, mensaje) VALUES ('$nombre_completo', '$email', '$telefono', '$mensaje')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar) {
    echo '
        <script>
            alert("Contacto registrado exitosamente");
            window.location = "../pages/contactenos.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error al registrar contacto: ' . mysqli_error($conexion) . '");
            window.location = "../pages/contactenos.php";
        </script>
    ';
}

mysqli_close($conexion);

?>