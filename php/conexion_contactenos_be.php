<?php

    $conexion = mysqli_connect("localhost", "root", "", "contactos");

    if($conexion) {
        echo "Conectado a la base de datos";
    } else {
        echo "No se pudo conectar a la base de datos";
    }

?>