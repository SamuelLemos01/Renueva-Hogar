class CarritoCompras {
    constructor() {
        this.productos = JSON.parse(localStorage.getItem('carrito')) || [];
        this.init();
    }

    init() {
        this.cargarEventListeners();
        this.actualizarContador();
        
        // Si estamos en la página del carrito, inicializar la página
        if (window.location.pathname.includes('carrito.php')) {
            setTimeout(() => {
                this.cargarProductosCarrito();
                this.actualizarResumen();
                this.cargarEventListenersPagina();
            }, 100);
        }
    }

    // ===== VALIDACIONES Y MENSAJES =====

    // Verificar si el usuario está logueado
    usuarioLogueado() {
        const tieneIconoLogout = document.querySelector('.fa-sign-out-alt') !== null;
        const localStorageLogin = localStorage.getItem('usuario_logueado') === 'true';
        
        
        return tieneIconoLogout || localStorageLogin;
    }

    // Mostrar mensaje para que el usuario inicie sesión
    mostrarMensajeLogin() {
        const modal = document.createElement('div');
        modal.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
        `;

        const contenido = document.createElement('div');
        contenido.style.cssText = `
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            text-align: center;
            max-width: 400px;
            margin: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        `;

        contenido.innerHTML = `
            <div style="font-size: 3rem; margin-bottom: 1rem; color: #c7a17a;">
                <i class="fa-solid fa-user-lock"></i>
            </div>
            <h3 style="margin-bottom: 1rem; color: #151515;">Inicia sesión para continuar</h3>
            <p style="margin-bottom: 2rem; color: #666;">
                Para agregar productos al carrito, necesitas iniciar sesión primero.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center;">
                <button onclick="window.location.href=getLoginUrl()" 
                        style="background-color: #c7a17a; color: white; border: none; 
                               padding: 0.8rem 2rem; border-radius: 0.5rem; cursor: pointer;">
                    Iniciar Sesión
                </button>
                <button onclick="this.closest('.modal-login').remove()" 
                        style="background-color: #f0f0f0; color: #666; border: none; 
                               padding: 0.8rem 2rem; border-radius: 0.5rem; cursor: pointer;">
                    Cancelar
                </button>
            </div>
        `;

        modal.className = 'modal-login';
        modal.appendChild(contenido);
        document.body.appendChild(modal);

        // Cerrar modal al hacer clic fuera
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.remove();
            }
        });

        // Cerrar modal con ESC
        const cerrarModal = (e) => {
            if (e.key === 'Escape') {
                modal.remove();
                document.removeEventListener('keydown', cerrarModal);
            }
        };
        document.addEventListener('keydown', cerrarModal);
    }

    mostrarNotificacion(mensaje, tipo = 'success') {
        const notificacion = document.createElement('div');
        notificacion.className = 'notificacion-carrito';
        notificacion.textContent = mensaje;
        
        let backgroundColor = '#c7a17a';
        if (tipo === 'error') backgroundColor = '#e74c3c';
        if (tipo === 'info') backgroundColor = '#3498db';
        
        notificacion.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${backgroundColor};
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            z-index: 10000;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
        `;

        document.body.appendChild(notificacion);

        // Animar entrada
        setTimeout(() => {
            notificacion.style.transform = 'translateX(0)';
        }, 100);

        // Remover después de 3 segundos
        setTimeout(() => {
            notificacion.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (document.body.contains(notificacion)) {
                    document.body.removeChild(notificacion);
                }
            }, 300);
        }, 3000);
    }

    // ===== FUNCIONALIDADES DEL CARRITO =====

    cargarEventListeners() {
        // Event listeners para botones de añadir al carrito
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('add-to-cart') || e.target.classList.contains('btn-carrito')) {
                e.preventDefault();
                this.agregarProducto(e.target);
            }
        });
    }

    agregarProducto(boton) {
        // Verificar si el usuario está logueado
        if (!this.usuarioLogueado()) {
            this.mostrarMensajeLogin();
            return;
        }

        const producto = {
            id: boton.dataset.id,
            nombre: boton.dataset.nombre,
            precio: parseFloat(boton.dataset.precio),
            imagen: boton.dataset.imagen,
            cantidad: 1
        };

        // Verificar si el producto ya existe en el carrito
        const productoExistente = this.productos.find(p => p.id === producto.id);
        
        if (productoExistente) {
            productoExistente.cantidad += 1;
        } else {
            this.productos.push(producto);
        }

        this.guardarCarrito();
        this.actualizarContador();
        this.mostrarNotificacion(`${producto.nombre} agregado al carrito`);
    }

    eliminarProducto(id) {
        // Convertir id a string para comparación correcta
        const idStr = String(id);
        this.productos = this.productos.filter(p => String(p.id) !== idStr);
        this.guardarCarrito();
        this.actualizarContador();
        this.mostrarNotificacion('Producto eliminado del carrito');
        
        // Si estamos en la página del carrito, recargar la vista
        if (window.location.pathname.includes('carrito.php')) {
            this.cargarProductosCarrito();
            this.actualizarResumen();
        }
    }

    cambiarCantidad(id, cambio) {
        const producto = this.productos.find(p => String(p.id) === String(id));
        
        if (producto) {
            const nuevaCantidad = producto.cantidad + cambio;
            if (nuevaCantidad >= 1) {
                producto.cantidad = nuevaCantidad;
                this.guardarCarrito();
                this.actualizarContador();
                this.mostrarNotificacion('Cantidad actualizada');
                
                // Si estamos en la página del carrito, recargar la vista
                if (window.location.pathname.includes('carrito.php')) {
                    this.cargarProductosCarrito();
                    this.actualizarResumen();
                }
            } else {
                // Si la cantidad sería menor a 1, mantener en 1
                producto.cantidad = 1;
                this.guardarCarrito();
                this.mostrarNotificacion('La cantidad mínima es 1', 'info');
                
                if (window.location.pathname.includes('carrito.php')) {
                    this.cargarProductosCarrito();
                    this.actualizarResumen();
                }
            }
        }
    }

    actualizarCantidad(id, nuevaCantidad) {
        const cantidad = parseInt(nuevaCantidad);
        
        if (isNaN(cantidad) || cantidad < 1) {
            // Si es NaN o menor a 1, mantener en 1
            const producto = this.productos.find(p => String(p.id) === String(id));
            if (producto) {
                producto.cantidad = 1;
                this.guardarCarrito();
                this.actualizarContador();
                this.mostrarNotificacion('La cantidad mínima es 1', 'info');
                
                if (window.location.pathname.includes('carrito.php')) {
                    this.cargarProductosCarrito();
                    this.actualizarResumen();
                }
            }
            return;
        }
        
        const producto = this.productos.find(p => String(p.id) === String(id));
        
        if (producto) {
            producto.cantidad = cantidad;
            this.guardarCarrito();
            this.actualizarContador();
            this.mostrarNotificacion('Cantidad actualizada');
            
            // Si estamos en la página del carrito, recargar la vista
            if (window.location.pathname.includes('carrito.php')) {
                this.cargarProductosCarrito();
                this.actualizarResumen();
            }
        }
    }

    guardarCarrito() {
        localStorage.setItem('carrito', JSON.stringify(this.productos));
    }

    actualizarContador() {
        const contador = document.querySelector('.carrito-contador');
        if (contador) {
            const totalItems = this.productos.reduce((total, producto) => total + producto.cantidad, 0);
            contador.textContent = totalItems;
            contador.style.display = totalItems > 0 ? 'block' : 'none';
        }
    }

    // ===== FUNCIONALIDADES DE LA PÁGINA DEL CARRITO =====

    cargarProductosCarrito() {
        const contenedor = document.getElementById('carrito-productos');
        
        if (!contenedor) {
            return;
        }
        
        if (this.productos.length === 0) {
            this.mostrarCarritoVacio(contenedor);
        } else {
            this.mostrarProductosCarrito(contenedor, this.productos);
        }
        
        this.actualizarResumen();
    }

    mostrarCarritoVacio(contenedor) {
        contenedor.innerHTML = `
            <div class="carrito-vacio">
                <i class="fa-solid fa-shopping-cart"></i>
                <h3>Tu carrito está vacío</h3>
                <p>Agrega algunos productos para comenzar tu compra</p>
                <button class="btn-seguir" onclick="window.location.href='catalogo.php'">
                    <i class="fa-solid fa-arrow-left"></i>
                    Ir al catálogo
                </button>
            </div>
        `;
    }

    mostrarProductosCarrito(contenedor, productos) {
        contenedor.innerHTML = productos.map(producto => `
            <div class="carrito-item" data-id="${producto.id}">
                <div class="item-imagen">
                    <img src="../${producto.imagen}" alt="${producto.nombre}">
                </div>
                <div class="item-detalles">
                    <h4 class="item-nombre">${producto.nombre}</h4>
                    <div class="item-categoria">Producto</div>
                    <div class="item-precio">${this.formatearPrecio(producto.precio)}</div>
                </div>
                <div class="item-cantidad">
                    <button class="cantidad-btn" onclick="window.carrito.cambiarCantidad(${producto.id}, -1)">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                    <input type="number" class="cantidad-input" value="${producto.cantidad}" 
                           min="1" onchange="window.carrito.actualizarCantidad(${producto.id}, this.value)">
                    <button class="cantidad-btn" onclick="window.carrito.cambiarCantidad(${producto.id}, 1)">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <div class="item-subtotal">
                    <span class="subtotal-precio">${this.formatearPrecio(producto.precio * producto.cantidad)}</span>
                </div>
                <button class="item-eliminar" onclick="if(confirm('¿Eliminar este producto?')) { window.carrito.eliminarProducto(${producto.id}); }">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        `).join('');
    }

    cargarEventListenersPagina() {
        // Botón continuar compra
        const btnContinuar = document.getElementById('continuar-compra');
        if (btnContinuar) {
            btnContinuar.addEventListener('click', () => {
                if (this.productos.length === 0) {
                    this.mostrarNotificacion('Tu carrito está vacío', 'error');
                    return;
                }
                // Redirigir a la página de checkout
                const currentPath = window.location.pathname;
                if (currentPath === '/Renueva-Hogar/' || currentPath === '/Renueva-Hogar/index.php' || currentPath.endsWith('/')) {
                    window.location.href = 'pages/checkout.php';
                } else if (currentPath.includes('/pages/')) {
                    window.location.href = 'checkout.php';
                } else {
                    window.location.href = 'pages/checkout.php';
                }
            });
        }
        
        // Botón seguir comprando
        const btnSeguir = document.getElementById('seguir-comprando');
        if (btnSeguir) {
            btnSeguir.addEventListener('click', () => {
                window.location.href = 'catalogo.php';
            });
        }
    }

    actualizarResumen() {
        const subtotal = this.productos.reduce((total, producto) => total + (producto.precio * producto.cantidad), 0);
        const envio = subtotal > 500000 ? 0 : 15000; // Envío gratis por compras mayores a $500,000
        const total = subtotal + envio;
        
        const subtotalEl = document.getElementById('subtotal');
        const envioEl = document.getElementById('envio');
        const totalEl = document.getElementById('total');
        
        if (subtotalEl) subtotalEl.textContent = this.formatearPrecio(subtotal);
        if (envioEl) envioEl.textContent = envio === 0 ? 'Gratis' : this.formatearPrecio(envio);
        if (totalEl) totalEl.textContent = this.formatearPrecio(total);
        
        // Actualizar estilos del envío
        if (envioEl) {
            if (envio === 0) {
                envioEl.style.color = '#27ae60';
                envioEl.style.fontWeight = '600';
            } else {
                envioEl.style.color = '';
                envioEl.style.fontWeight = '';
            }
        }
    }

    formatearPrecio(precio) {
        return '$' + precio.toLocaleString('es-CO');
    }

    // ===== MÉTODOS PÚBLICOS =====

    obtenerProductos() {
        return this.productos;
    }

    obtenerTotal() {
        return this.productos.reduce((total, producto) => total + (producto.precio * producto.cantidad), 0);
    }

    obtenerTotalItems() {
        return this.productos.reduce((total, producto) => total + producto.cantidad, 0);
    }
}

// Inicializar el carrito cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    window.carrito = new CarritoCompras();
});

// Función para mostrar el carrito (llamada desde el header)
function mostrarCarrito() {
    if (window.location.pathname.includes('carrito.php')) {
        return; // Ya estamos en la página del carrito
    }
    
    // Redirigir a la página del carrito
    const currentPath = window.location.pathname;
    
    if (currentPath === '/Renueva-Hogar/' || currentPath === '/Renueva-Hogar/index.php' || currentPath.endsWith('/')) {
        window.location.href = 'pages/carrito.php';
    } else if (currentPath.includes('/pages/')) {
        window.location.href = 'carrito.php';
    } else {
        window.location.href = 'pages/carrito.php';
    }
}

// Función para obtener la URL correcta de login según la ubicación actual
function getLoginUrl() {
    const currentPath = window.location.pathname;
    
    // Si estamos en el directorio raíz 
    if (currentPath === '/Renueva-Hogar/' || currentPath === '/Renueva-Hogar/index.php' || currentPath.endsWith('/')) {
        return 'pages/login.php';
    }
    
    // Si estamos en el directorio pages 
    if (currentPath.includes('/pages/')) {
        return 'login.php';
    }
    
    return 'pages/login.php';
}