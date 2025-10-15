<?php
// Iniciar sesión
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id']) || empty($_SESSION['usuario_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'solicitudes_compras');

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar que se recibieron los datos
if (!isset($_POST['nombre']) || !isset($_POST['productos'])) {
    die("Datos incompletos");
}

// Obtener datos del POST
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
$notas = isset($_POST['notas']) ? mysqli_real_escape_string($conexion, $_POST['notas']) : '';

// Decodificar productos JSON
$productos = json_decode($_POST['productos'], true);

// Calcular totales
$subtotal = 0;
foreach ($productos as $producto) {
    $subtotal += $producto['precio'] * $producto['cantidad'];
}

$envio = $subtotal > 500000 ? 0 : 15000;
$total = $subtotal + $envio;

// Preparar productos JSON para guardar
$productos_json = json_encode($productos, JSON_UNESCAPED_UNICODE);

// Insertar en la base de datos
$sql = "INSERT INTO solicitudes (nombre, apellido, telefono, email, direccion, notas, productos, subtotal, envio, total) 
        VALUES ('$nombre', '$apellido', '$telefono', '$email', '$direccion', '$notas', '$productos_json', $subtotal, $envio, $total)";

if (mysqli_query($conexion, $sql)) {
    // Redirigir de vuelta al checkout con mensaje de éxito
    header("Location: ../pages/checkout.php?success=1");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
