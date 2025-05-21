<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "usuarios"; // o el nombre que le hayas dado a tu base de datos

<<<<<<< HEAD
    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");

    // if($conexion) {
    //     echo "Conectado a la base de datos";
    // } else {
    //     echo "No se pudo conectar a la base de datos";
    // }

=======
$conexion = mysqli_connect($host, $usuario, $clave, $bd);

// Verificar conexión
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}
>>>>>>> 97b7b16 (Limpieza: eliminado subrepositorio accidental)
?>