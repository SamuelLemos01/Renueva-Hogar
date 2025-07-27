<?php
$host = 'localhost';
$dbname = 'user_admin';
$username = 'root';
$password = '';

$conexion = mysqli_connect($host, $username, $password, $dbname);

// Verificar si está logueado
function verificarAdmin() {
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: ../login/login_admin.php");
        exit();
    }
}

// Obtener estadísticas
function obtenerEstadisticas() {
    global $conexion;
    
    $stats = [];
    
    // Contar usuarios
    $consulta = "SELECT COUNT(*) as total FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta);
    $stats['usuarios'] = mysqli_fetch_assoc($resultado)['total'];
    
    return $stats;
}
?> 