<?php
session_start();

// Verificar si está logueado 
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../login/login_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo - Renueva Hogar</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
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
                    <a href="logout.php" class="logout-btn"><i class="fa-solid fa-sign-out-alt"></i> Cerrar Sesión</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="admin-main">
        <div class="admin-container">
            <div class="admin-header-section">
                <h1 class="admin-title">Panel de Administración</h1>
            </div>

            <div class="admin-stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">24</h3>
                        <p class="stat-label">Usuarios Registrados</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">156</h3>
                        <p class="stat-label">Productos Activos</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fa-solid fa-shopping-cart"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">89</h3>
                        <p class="stat-label">Ventas del Mes</p>
                    </div>
                </div>
            </div>

            <div class="admin-actions-grid">
                <div class="action-card">
                    <div class="action-icon">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <h3 class="action-title">Gestionar Productos</h3>
                    <p class="action-description">Añade, edita o elimina productos del catálogo</p>
                    <a href="../crud_productos/productos.php" class="action-btn">Gestionar Productos</a>
                </div>

                <div class="action-card">
                    <div class="action-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="action-title">Gestionar Usuarios</h3>
                    <p class="action-description">Administra los usuarios registrados en el sistema</p>
                    <a href="../crud_usuarios/usuarios.php" class="action-btn">Gestionar Usuarios</a>
                </div>

                <div class="action-card">
                    <div class="action-icon">
                        <i class="fa-solid fa-shopping-cart"></i>
                    </div>
                    <h3 class="action-title">Ver Ventas</h3>
                    <p class="action-description">Consulta el historial de ventas y pedidos</p>
                    <a href="ventas.php" class="action-btn">Ver Ventas</a>
                </div>

                <div class="action-card">
                    <div class="action-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h3 class="action-title">Mensajes</h3>
                    <p class="action-description">Revisa los mensajes de contacto de clientes</p>
                    <a href="mensajes.php" class="action-btn">Ver Mensajes</a>
                </div>
            </div>

            <div class="admin-recent-section">
                <h2 class="section-title">Actividad Reciente</h2>
                <div class="recent-activity">
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="activity-content">
                            <p class="activity-text">Nuevo producto añadido: "Silla Ergonómica"</p>
                            <span class="activity-time">Hace 2 horas</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <p class="activity-text">Nuevo usuario registrado: "María González"</p>
                            <span class="activity-time">Hace 4 horas</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fa-solid fa-shopping-cart"></i>
                        </div>
                        <div class="activity-content">
                            <p class="activity-text">Nueva venta realizada: $890.000</p>
                            <span class="activity-time">Hace 6 horas</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="activity-content">
                            <p class="activity-text">Nuevo mensaje de contacto recibido</p>
                            <span class="activity-time">Hace 8 horas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="admin-footer">
        <div class="contenedor">
            <p>&copy; 2025 Renueva Hogar - Panel Administrativo</p>
        </div>
    </footer>
</body>
</html> 