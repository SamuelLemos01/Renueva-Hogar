<?php
/**
 * Helper para estandarizar el header en todas las páginas
 * 
 * @param string $titulo_pagina - Título de la página
 * @param string $ruta_base - Ruta base relativa (ej: "../" para páginas en /pages/)
 * @param array $css_extra - Array de archivos CSS adicionales (opcional)
 * @param array $js_extra - Array de archivos JS adicionales (opcional)
 * @param bool $requiere_no_login - Si es true, redirige si ya está logueado (para login/register)
 */
function incluirHeader($titulo_pagina = '', $ruta_base = '../', $css_extra = [], $js_extra = [], $requiere_no_login = false) {
    // Iniciar sesión si no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Función para obtener el contador del carrito desde la sesión
    function obtenerContadorCarrito() {
        if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
            return count($_SESSION['carrito']);
        }
        return 0;
    }

    // Función para verificar si el usuario está logueado
    function usuarioLogueado() {
        return isset($_SESSION['usuario_id']) && !empty($_SESSION['usuario_id']);
    }

    $contador_carrito = obtenerContadorCarrito();
    $usuario_logueado = usuarioLogueado();
    $titulo_completo = $titulo_pagina ? $titulo_pagina . ' - Renueva Hogar' : 'Renueva Hogar';
    
    // Validación para páginas que requieren no estar logueado (login/register)
    if ($requiere_no_login && $usuario_logueado) {
        header("Location: " . $ruta_base . "index.php");
        exit();
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $titulo_completo; ?></title>
        
        <link rel="stylesheet" href="<?php echo $ruta_base; ?>assets/css/base.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
        <?php if (!empty($css_extra)): ?>
            <?php foreach ($css_extra as $css): ?>
                <link rel="stylesheet" href="<?php echo $css; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
        
        <?php if (!empty($js_extra)): ?>
            <?php foreach ($js_extra as $js): ?>
                <script src="<?php echo $js; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
        
        <!-- Script para marcar estado de login -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                <?php if ($usuario_logueado): ?>
                    localStorage.setItem('usuario_logueado', 'true');
                <?php else: ?>
                    localStorage.removeItem('usuario_logueado');
                <?php endif; ?>
            });
        </script>
    </head>

    <body>
        <header>
            <div class="contenedor-barra-navegacion">
                <nav class="barra-navegacion contenedor">
                    <div class="contenedor-logo">
                        <h1 class="logo"><a href="<?php echo $ruta_base; ?>index.php">Renueva Hogar</a></h1>
                    </div>
                    <ul class="menu">
                        <li><a href="<?php echo $ruta_base; ?>pages/catalogo.php">Productos</a></li>
                        <li><a href="<?php echo $ruta_base; ?>pages/Quienes_somos.php">Quienes somos</a></li>
                        <li><a href="<?php echo $ruta_base; ?>pages/contactenos.php">Contáctenos</a></li>
                    </ul>

                    <div class="header-icons">
                        <?php if ($usuario_logueado): ?>
                            <a href="<?php echo $ruta_base; ?>php/logout.php" class="user-icon" title="Cerrar Sesión">
                                <i class="fa-solid fa-sign-out-alt"></i>
                            </a>
                            <div class="carrito-container">
                                <i class="fa-solid fa-basket-shopping" onclick="mostrarCarrito()"></i>
                                <?php if ($contador_carrito > 0): ?>
                                    <span class="carrito-contador"><?php echo $contador_carrito; ?></span>
                                <?php endif; ?>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo $ruta_base; ?>pages/login.php" class="user-icon" title="Iniciar Sesión">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>
        </header>
    <?php
}

/**
 * Helper para incluir el footer estándar
 * 
 * @param string $ruta_base - Ruta base relativa
 */
function incluirFooter($ruta_base = '../') {
    ?>
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
                        <li><a href="<?php echo $ruta_base; ?>index.php">Inicio</a></li>
                        <li><a href="<?php echo $ruta_base; ?>pages/catalogo.php">Productos</a></li>
                        <li><a href="<?php echo $ruta_base; ?>pages/Quienes_somos.php">Quienes somos</a></li>
                        <li><a href="<?php echo $ruta_base; ?>pages/contactenos.php">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="derechos-autor">
            <p>&copy; 2025 Renueva Hogar - Todos los derechos reservados</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}
?>
