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
incluirHeader('Finalizar Compra', '../', ['../assets/css/pages.css', '../assets/css/checkout.css']);
?>

<body>
    <section class="banner-interno">
        <div class="contenido-banner-interno">
            <section class="">
                <p>Finaliza tu compra</p>
                <h2>Confirma tus datos <br /> y productos</h2>
            </section>
        </div>
    </section>

    <main class="contenido-principal">
        <div class="contenedor">
            <h1 class="encabezado-1" style="font-weight: 700;">Finalizar Compra</h1>
            
            <div class="checkout-contenedor">
                <!-- Panel de Productos -->
                <div class="checkout-productos">
                    <div class="checkout-card">
                        <h3 class="checkout-titulo">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Tus Productos
                        </h3>
                        
                        <div id="checkout-productos">
                            <!-- Los productos se cargarán dinámicamente aquí -->
                        </div>
                        
                        <div class="checkout-totales">
                            <div class="total-item">
                                <span class="total-label">Subtotal:</span>
                                <span class="total-valor" id="checkout-subtotal">$0</span>
                            </div>
                            
                            <div class="total-item">
                                <span class="total-label">Envío:</span>
                                <span class="total-valor" id="checkout-envio">$15.000</span>
                            </div>
                            
                            <div class="total-item total-final">
                                <span class="total-label">Total:</span>
                                <span class="total-valor" id="checkout-total">$15.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel de Datos -->
                <div class="checkout-datos">
                    <div class="checkout-card">
                        <h3 class="checkout-titulo">
                            <i class="fa-solid fa-user"></i>
                            Tus Datos
                        </h3>
                        
                        <form id="formulario-checkout" class="formulario-checkout">
                            <div class="form-group">
                                <label for="nombre">Nombre *</label>
                                <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre">
                            </div>
                            
                            <div class="form-group">
                                <label for="apellido">Apellido *</label>
                                <input type="text" id="apellido" name="apellido" required placeholder="Ingresa tu apellido">
                            </div>
                            
                            <div class="form-group">
                                <label for="telefono">Teléfono *</label>
                                <input type="tel" id="telefono" name="telefono" required placeholder="Ingresa tu teléfono">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required placeholder="Ingresa tu email">
                            </div>
                            
                            <div class="form-group">
                                <label for="direccion">Dirección de Entrega *</label>
                                <textarea id="direccion" name="direccion" rows="3" required placeholder="Ingresa tu dirección completa"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="notas">Notas adicionales (opcional)</label>
                                <textarea id="notas" name="notas" rows="2" placeholder="Alguna observación sobre tu pedido..."></textarea>
                            </div>
                            
                            <div class="checkout-info">
                                <p><i class="fa-solid fa-info-circle"></i> Un asesor se pondrá en contacto contigo para confirmar tu pedido</p>
                            </div>
                            
                            <button type="submit" class="btn-contactar-asesor" id="btn-contactar">
                                <i class="fa-brands fa-whatsapp"></i>
                                Contactar Asesor
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="../assets/js/carrito.js"></script>
    <script src="../assets/js/checkout.js"></script>
</body>

<?php incluirFooter('../'); ?>
