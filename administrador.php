
   
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Renueva Hogar - Iniciar Sesión</title>
    <link rel="stylesheet" href="http://localhost/Renueva-Hogar-practica/assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .formulario-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
            background: linear-gradient(to right, #e2e9a1, #8fd3c4);
            min-height: 70vh;
        }
        
        .formulario {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
            text-align: center;
            border: 1px solid #dbc1a0;
            margin: 0 auto;
        }
        
        .header {
            background-color: #c3a284;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .formulario input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 20px;
            box-sizing: border-box;
        }
        
        .login-btn {
            background-color: #c3a284;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 20px;
            cursor: pointer;
            margin-top: 15px;
        }
        
        .login-btn:hover {
            background-color: #b39276;
        }
        
        .forgot-password {
            display: block;
            margin-top: 15px;
            margin-bottom: 15px;
            color: #c3a284;
            text-decoration: none;
            font-size: 14px;
        }
        
        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }
        
        .register-link a {
            color: #e0915c;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br>
    <!-- Header -->
    <header>
        <div class="contenedor-barra-navegacion">
            <nav class="barra-navegacion contenedor">
                <div class="contenedor-logo">
                    <h1 class="logo"><a href="index.php">Renueva Hogar</a></h1>
                </div>
                <ul class="menu">
                    <li><a href="http://localhost/Renueva-Hogar-practica/index.php">Inicio</a></li>
                    <li><a href="http://localhost/Renueva-Hogar-practica/catalogo.php">Productos</a></li>
                    <li><a href="http://localhost/Renueva-Hogar-practica/Quienes_somos.php">Quienes somos</a></li>
                    <li><a href="http://localhost/Renueva-Hogar-practica/contactenos.php">Contáctenos</a></li>
                </ul>

                <form class="formulario-busqueda">
                    <input type="search" placeholder="Buscar..." />
                    <button class="btn-busqueda">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <a href="login.php"><i class="fa-solid fa-user"></i></a>
                <i class="fa-solid fa-basket-shopping"></i>
                <a href="administrador\administrador.php"><i class="fa-regular fa-user"></i></a>
            </nav>
        </div>
    </header>

    <!-- Banner -->
    <section>
        <img src="assets\images\cajon\cajon.jpeg" alt="Banner Promocional" style="width: 100%; max-height: 180px; object-fit: cover; display: block;">
    </section>

    <!-- Contenido Principal - Formulario de Login -->
    <div class="formulario-container">
        <div class="formulario">
            <div class="header">
                <h2>Iniciar Sesión</h2>
            </div>
            
            <form>
                <input type="email" placeholder="Correo Electrónico" required>
                <input type="password" placeholder="Contraseña" required>
                
                <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                
                <button type="submit" class="login-btn">Iniciar Sesión</button>
            </form>
            
            <div class="register-link">
                <span>¿No tienes una cuenta? </span><a href="http://localhost/Renueva-Hogar-practica/administrador/registrar_administrador.php">Regístrate</a>
            </div>
        </div>
    </div>

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