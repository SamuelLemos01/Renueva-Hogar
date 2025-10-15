<?php
// Verificar si el usuario está logueado
session_start();

// Si no está logueado, redirigir al login
if (!isset($_SESSION['usuario_id']) || empty($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

// Incluir header helper
require_once '../includes/header_helper.php';
incluirHeader('Carrito de Compras', '../', ['../assets/css/pages.css', '../assets/css/carrito.css']);
?>

<body>
    <section class="banner-interno">
        <div class="contenido-banner-interno">
            <section class="">
                <p>Tu carrito de compras</p>
                <h2>Revisa tus productos <br /> antes de finalizar</h2>
                <a href="catalogo.php">Seguir comprando</a>
            </section>
        </div>
    </section>

    <main class="contenido-principal">
        <div class="contenedor">
            <h1 class="encabezado-1" style="font-weight: 700;">Mi Carrito</h1>
            
            <div class="carrito-contenedor">
                <!-- Productos del carrito -->
                <div class="carrito-productos">
                    <div id="carrito-productos">
                        <!-- Los productos se cargarán dinámicamente aquí -->
                    </div>
                </div>

                <!-- Resumen del pedido -->
                <div class="carrito-resumen">
                    <div class="resumen-card">
                        <h3 class="resumen-titulo">Resumen del Pedido</h3>
                        
                        <div class="resumen-detalles">
                            <div class="resumen-item">
                                <span class="resumen-label">Subtotal:</span>
                                <span class="resumen-valor" id="subtotal">$0</span>
                            </div>
                            
                            <div class="resumen-item">
                                <span class="resumen-label">Envío:</span>
                                <span class="resumen-valor" id="envio">$15.000</span>
                            </div>
                            
                            <div class="resumen-item resumen-total">
                                <span class="resumen-label">Total:</span>
                                <span class="resumen-valor" id="total">$15.000</span>
                            </div>
                        </div>

                        <div class="resumen-acciones">
                            <button class="btn-seguir" id="seguir-comprando">
                                <i class="fa-solid fa-arrow-left"></i>
                                Seguir Comprando
                            </button>
                            
                            <button class="btn-continuar" id="continuar-compra">
                                <i class="fa-solid fa-credit-card"></i>
                                Continuar Compra
                            </button>
                        </div>

                        <div class="resumen-info">
                            <p><i class="fa-solid fa-truck"></i> Envío gratis en compras superiores a $500.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="../assets/js/carrito.js"></script>

<?php incluirFooter('../'); ?>
