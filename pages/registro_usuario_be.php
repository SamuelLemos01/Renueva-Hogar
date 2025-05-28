<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(79, 132, 202, 0.2); /* Subtle shadow with a hint of blue */
    border-radius: 6px;
    overflow: hidden;
    background-color: #e3f2fd; /* Light blue background */
}

th, td {
    padding: 10px 12px;
    text-align: left;
    border-bottom: 1px solid #bbdefb; /* Light blue border */
}

th {
    background-color: #4f84ca; /* Primary blue header background */
    font-weight: bold;
    color: #fff; /* White header text */
}

tr:hover {
    background-color: #cce5ff; /* Lighter blue on hover */
}

tbody tr:nth-child(even) {
    background-color: #d7ecff; /* Slightly different light blue for even rows */
}

/* Optional: Style for specific data types */
/*
td:nth-child(2) { /* Example: Style the 'DOCUMENTO' column */
/*  font-family: monospace;
    color: #1976d2; /* Darker blue text */

*/

/* Add some spacing around the table */
body {
    padding: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f8ff; /* Very light blue page background */
}

h2 {
    color: #3f51b5; /* Primary blue for headings */
    margin-top: 0;
    margin-bottom: 10px;
}

/* Responsive design */
@media (max-width: 600px) {
    table {
        border: 0;
    }

    thead {
        display: none;
    }

    tr {
        margin-bottom: 10px;
        display: block;
        border-bottom: 2px solid #90caf9; /* Light blue border */
    }

    td {
        display: block;
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 10px;
        font-weight: bold;
        text-align: left;
        color: #1e88e5; /* Another shade of blue for labels */
    }
    
}
    </style>
</head>
<body>
    

<?php
if(isset($_POST['registrar'])){
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$telefono = $_POST['telefono'];
$tipo_documento = $_POST['tipo_documento'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$correo_electronico = $_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios (nombre_completo, telefono, tipo_documento,documento, direccion, correo_electronico, contrasena) VALUES ('$nombre_completo', '$telefono', '$tipo_documento', '$documento', '$direccion', '$correo_electronico', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
             window.location = "register.php";
        </script>
    ';
}

mysqli_close($conexion);
}
?>
<?php





    include 'conexion_be.php';
$existe=0;
    $documento = $_POST['documento'];
    if($documento==""){

        echo"El documento es obligatorio";

    }else{

        echo"
        <table>
        
        <tr>
                <td>TIPO DOCUMENTO</td>    
        <td>DOCUMENTO</td>
        
            <td>NOMBRE</td>    
        <td>TELEFONO</td>
        
    
        
            <td>DIRECCIÓN</td>    
        <td>CORREO</td>
        <td>CONTRASEÑA</td>
        
        </tr>

        
        ";

    $ejecutar = mysqli_query($conexion,"SELECT * FROM usuarios  WHERE documento='$documento'");
    
    while($consulta=mysqli_fetch_array($ejecutar))
    {
echo"
        
        <tr>
                <td>".$consulta['tipo_documento']."</td>    
        <td>".$consulta['documento']."</td>
        
            <td>".$consulta['nombre_completo']."</td>    
        <td>".$consulta['telefono']."</td>
        
    
        
            <td>".$consulta['direccion']."</td>    
        <td>".$consulta['correo_electronico']."</td>
        <td>".$consulta['contrasena']."</td>
        
        </tr>
              
";
$existe++;
    }
    echo" </table>";
    if($existe==0) {
        echo '
            <script>
                alert("Usuario no encontrado");
                       </script>
        ';
    }
    
    mysqli_close($conexion);
    

}

?>

                <a href="register.php">Volver al formulario</a>
                <a href="../index.php">Volver a la Pagina Principal</a>
<style>
    /* Styles for the "Volver al formulario" and "Volver a la Pagina Principal" links */
a {
    display: inline-block; /* Allows setting padding and margins */
    padding: 10px 15px;
    margin-right: 10px; /* Space between buttons */
    text-decoration: none; /* Remove underline */
    color: #fff; /* White text */
    background-color: #4f84ca; /* Primary blue background */
    border-radius: 4px;
    transition: background-color 0.3s ease; /* Smooth hover effect */
    font-size: 16px;
}

a:hover {
    background-color: #3069b2; /* Darker blue on hover */
}

/* Optional: Style for the second button to distinguish it */
a:last-child {
    margin-right: 0; /* Remove margin from the last button */
    background-color: #64b5f6; /* A lighter blue for the second button */
}

a:last-child:hover {
    background-color: #42a5f5; /* Slightly darker shade on hover */
}

/* Style the container of the buttons if needed */
div.button-container {
    margin-top: 20px; /* Add some space above the buttons */
}
</style>
</body>
</html>
