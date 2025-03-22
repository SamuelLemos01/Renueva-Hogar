<?php

$servername = "localhost";
$username = "senadsog_admin_tienda";
$password = "S@muel2131";
$dbname = "senadsog_renueva-hogar";


$conexion = mysqli_connect($servername, $username, $password, $dbname);


if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>