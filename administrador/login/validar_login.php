<?php
session_start();

$host = 'localhost';
$dbname = 'user_admin';
$username = 'root';
$password = '';

$conexion = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Error en la conexión: " . mysqli_connect_error();
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);
    $admin = mysqli_fetch_assoc($resultado);
    
    if ($admin) {
        // Usuario encontrado, crear sesión simple
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_usuario'] = $admin['usuario'];
        
        // Redirigir al panel
        header("Location: ../admin/");
        exit();
    } else {
        // Usuario no encontrado
        header("Location: login_admin.php?error=1");
        exit();
    }
} else {
    header("Location: login_admin.php");
    exit();
}
?>