<?php
require_once '../../includes/header_helper.php';

incluirHeader('Panel Administrativo', '../../', ['../../assets/css/login.css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'], [], true);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renueva Hogar - Panel Administrativo</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <main class="contenido-principal-auth">
        <div class="wrapper login-wrapper">
            <div class="form-header">
                <div class="titles">
                    <div class="title-login">Panel Administrativo</div>
                </div>
            </div>
            <form action="validar_login.php" method="POST" class="login-form">
                <div class="input-box">
                    <input type="text" class="input-field" id="admin-usuario" name="usuario" required>
                    <label for="admin-usuario" class="label">Usuario Administrador</label>
                    <i class='bx bx-user icon'></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" id="admin-contrasena" name="contraseña" required>
                    <label for="admin-contrasena" class="label">Contraseña</label>
                    <i class='bx bx-lock-alt icon'></i>
                </div>
                <div class="input-box">
                    <button type="submit" class="btn-submit" id="AdminSignInBtn">
                        Acceder al Panel <i class='bx bx-log-in'></i>
                    </button>
                </div>
                <div class="switch-form">
                    <span>¿Eres cliente? <a href="../../pages/login.php">Inicia sesión aquí</a></span>
                </div>
            </form>
        </div>
    </main>

    <footer class="pie-pagina">
        <div class="contenedor contenedor-pie-pagina">
            <div class="menu-pie-pagina">
                <div class="informacion-contacto">
                    <p class="titulo-pie-pagina">Información de Contacto</p>
                    <ul>
                        <li><i class="fa-solid fa-location-dot"></i> Calle 15 #8-45, Neiva, Huila</li>
                        <li><i class="fa-solid fa-phone"></i> (608) 865-4321</li>
                        <li><i class="fa-solid fa-envelope"></i> info@renuevahogarmuebles.com</li>
                    </ul>
                    <div class="iconos-sociales">
                        <span class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                        <span class="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </span>
                    </div>
                </div>

                <div class="informacion">
                    <p class="titulo-pie-pagina">Enlaces Rápidos</p>
                    <ul>
                        <li><a href="../../index.php">Inicio</a></li>
                        <li><a href="../../pages/catalogo.php">Productos</a></li>
                        <li><a href="../../pages/Quienes_somos.php">Quienes somos</a></li>
                        <li><a href="../../pages/contactenos.php">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="derechos-autor">
            <p>&copy; 2025 Renueva Hogar - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>