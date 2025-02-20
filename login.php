<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renueva Hogar - Iniciar Sesión</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="contenedor-barra-navegacion">
            <nav class="barra-navegacion contenedor">
                <div class="contenedor-logo">
                    <h1 class="logo"><a href="index.php">Renueva Hogar</a></h1>
                </div>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contáctenos</a></li>
                </ul>

                <form class="formulario-busqueda">
                    <input type="search" placeholder="Buscar..." />
                    <button class="btn-busqueda">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <a href="login.php"><i class="fa-solid fa-user"></i></a>				
                <i class="fa-solid fa-basket-shopping"></i>
            </nav>
        </div>
    </header>

    <main class="contenido-principal-auth">
        <div class="wrapper login-wrapper">
            <div class="form-header">
                <div class="titles">
                    <div class="title-login">Iniciar Sesión</div>
                </div>
            </div>
            <form action="login.php" method="POST" class="login-form" >
                <div class="input-box">
                    <input type="text" class="input-field" id="log-email" name="email" required>
                    <label for="log-email" class="label">Correo Electrónico</label>
                    <i class='bx bx-envelope icon'></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" id="log-pass" name="contrasena" required>
                    <label for="log-pass" class="label">Contraseña</label>
                    <i class='bx bx-lock-alt icon'></i>
                </div>
                <div class="form-cols">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div class="input-box">
                    <button type="submit" class="btn-submit" id="SignInBtn">Iniciar Sesión <i class='bx bx-log-in'></i></button>
                </div>
                <div class="switch-form">
                    <span>¿No tienes una cuenta? <a href="register.php">Regístrate</a></span>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
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
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="derechos-autor">
            <p>
                &copy; 2025 Renueva Hogar - Todos los derechos reservados
            </p>
        </div>
    </footer>
</body>
</html>