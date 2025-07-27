<?php
session_start();

// Verificar si está logueado
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../login/login_admin.php");
    exit();
}

// Conexión a la base de datos
$host = 'localhost';
$dbname = 'user_admin';
$username = 'root';
$password = '';

$conexion = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Error en la conexión: " . mysqli_connect_error();
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Productos - Panel Administrativo</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="productos.css">
</head>
<body>
    <header class="admin-header">
        <div class="contenedor-barra-navegacion">
            <nav class="barra-navegacion contenedor">
                <div class="contenedor-logo">
                    <h1 class="logo"><a href="../../index.php">Renueva Hogar</a></h1>
                </div>
                <div class="admin-nav">
                    <span class="admin-welcome">Bienvenido, <?php echo htmlspecialchars($_SESSION['admin_usuario']); ?></span>
                    <a href="index.php" class="logout-btn"><i class="fa-solid fa-home"></i> Panel</a>
                    <a href="logout.php" class="logout-btn"><i class="fa-solid fa-sign-out-alt"></i> Cerrar Sesión</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="admin-main">
        <div class="admin-container">
            <div class="admin-header-section">
                <h1 class="admin-title">Gestionar Productos</h1>
                <p class="admin-subtitle">Administra el catálogo de productos</p>
            </div>

            <div class="mensaje-info">
                <i class="fa-solid fa-info-circle"></i>
                <strong>Nota:</strong> Esta sección está preparada para futuras implementaciones. 
                Por ahora, los productos se gestionan directamente en el archivo del catálogo.
            </div>

            <div class="productos-container">
                <div class="productos-header">
                    <h2>Lista de Productos</h2>
                    <button class="btn-nuevo" onclick="alert('Función en desarrollo')">
                        <i class="fa-solid fa-plus"></i> Nuevo Producto
                    </button>
                </div>

                <table class="tabla-productos">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Silla Eames Moderna</td>
                            <td>Sillas</td>
                            <td>$289.000</td>
                            <td><span style="color: #28a745;">Activo</span></td>
                            <td>
                                <button class="btn-accion btn-editar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn-accion btn-eliminar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cama King Moderna</td>
                            <td>Camas</td>
                            <td>$1.250.000</td>
                            <td><span style="color: #28a745;">Activo</span></td>
                            <td>
                                <button class="btn-accion btn-editar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn-accion btn-eliminar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Comedor Familiar</td>
                            <td>Comedores</td>
                            <td>$890.000</td>
                            <td><span style="color: #28a745;">Activo</span></td>
                            <td>
                                <button class="btn-accion btn-editar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn-accion btn-eliminar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Closet Modular</td>
                            <td>Closets</td>
                            <td>$1.850.000</td>
                            <td><span style="color: #28a745;">Activo</span></td>
                            <td>
                                <button class="btn-accion btn-editar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn-accion btn-eliminar" onclick="alert('Función en desarrollo')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html> 