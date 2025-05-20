<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renueva Hogar - Registro</title>
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
					<li><a href="catalogo.php">Productos</a></li>
					<li><a href="Quienes_somos.php">Quienes somos</a></li>
					<li><a href="contactenos.php">Contáctenos</a></li>
				</ul>

                <form class="formulario-busqueda" action="registro_usuario_be.php">
                    <input type="search" placeholder="Buscar..." />
                    <button class="btn-busqueda">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <a href="login.php"><i class="fa-solid fa-user"></i></a>				
                <i class="fa-solid fa-basket-shopping"></i>
                <a href="http://localhost/Renueva-Hogar-practica/administrador/administrador.php"><i class="fa-regular fa-user"></i></a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="contenido-principal-auth">
        <div style="height:900px !important;"class="wrapper register-wrapper">
            <div class="form-header">
                <div class="titles">
                    <div class="title-login">Registro</div>
                </div>
            </div>
            <form action="php\registro_usuario_be.php" method="POST" class="register-form" >
                <div class="input-box">
                    <input type="text" class="input-field" id="reg-name" name="nombre_completo" >
                    <label for="reg-name" class="label">Nombre Completo</label>
                    <i class='bx bx-user icon'></i>
                </div>
                <div class="input-box">
                    <input type="tel" class="input-field" id="reg-phone" name="telefono" >
                    <label for="reg-phone" class="label">Teléfono</label>
                    <i class='bx bx-phone icon'></i>
                </div>
                <div class="input-box">
                    <input type="tel" class="input-field" id="fa-solid fa-envelope" name="tipo_documento" >
                    <label for="reg-phone" class="label"> Tipo de Documento</label>
                    <i class='bx bx-envelope icon'></i>
                </div>
                <div class="input-box">
                    <input type="tel" class="input-field" id="" name="documento" required>
                    <label for="reg-phone" class="label">Documento</label>
                    <i class='bx bx-envelope icon'></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="reg-address" name="direccion" >
                    <label for="reg-address" class="label">Dirección</label>
                    <i class='bx bx-map icon'></i>
                </div>
                <div class="input-box">
                    <input type="email" class="input-field" id="reg-email" name="correo_electronico" >
                    <label for="reg-email" class="label">Correo Electrónico</label>
                    <i class='bx bx-envelope icon'></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" id="reg-pass" name="contrasena" >
                    <label for="reg-pass" class="label">Contraseña</label>
                    <i class='bx bx-lock-alt icon'></i>
</div>
                <div class="input-box">
                    <button type="submit" class="btn-submit" name="registrar">Registrarse <i class='bx bx-user-plus'></i></button>
                    <br><br>
                    <button type="submit" class="btn-submit" name="consultar">Consultar <i class='bx bx-user-plus'></i></button>
              
                </div>
                <div class="switch-form">
                    <span>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></span>
                </div>
            </form>
        </div>
    </main>
    <br><br><br><br><br><br><br>

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
                    <li><a href="index.php">Inicio</a></li>
					<li><a href="catalogo.php">Productos</a></li>
					<li><a href="Quienes_somos.php">Quienes somos</a></li>
					<li><a href="contactenos.php">Contáctenos</a></li>
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
