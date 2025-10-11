// Sistema de carrito mejorado para Renueva Hogar
class CarritoCompras {
    constructor() {
        this.productos = JSON.parse(localStorage.getItem('carrito')) || [];
        this.init();
    }

    init() {
        this.cargarEventListeners();
        this.actualizarContador();
    }

    // Verificar si el usuario está logueado
    usuarioLogueado() {
        // Verificar múltiples indicadores de que el usuario está logueado
        const tieneIconoLogout = document.querySelector('.fa-sign-out-alt') !== null;
        const localStorageLogin = localStorage.getItem('usuario_logueado') === 'true';
        const tieneCarrito = document.querySelector('.carrito-container') !== null;
        
        console.log('Verificando login:', {
            tieneIconoLogout,
            localStorageLogin,
            tieneCarrito
        });
        
        return tieneIconoLogout || localStorageLogin;
    }

    // Mostrar mensaje para que el usuario inicie sesión
    mostrarMensajeLogin() {
        // Crear modal de mensaje
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

    cargarEventListeners() {
        // Event listeners para botones de añadir al carrito
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('add-to-cart') || e.target.classList.contains('btn-carrito')) {
                e.preventDefault();
                this.agregarProducto(e.target);
            }
        });

        // Event listeners para el carrito (si existe)
        const carrito = document.getElementById('carrito');
        if (carrito) {
            carrito.addEventListener('click', (e) => {
                if (e.target.classList.contains('eliminar-producto')) {
                    this.eliminarProducto(e.target.dataset.id);
                }
            });
        }

        // Event listener para vaciar carrito
        const vaciarBtn = document.getElementById('vaciar-carrito');
        if (vaciarBtn) {
            vaciarBtn.addEventListener('click', () => {
                this.vaciarCarrito();
            });
        }
    }

    agregarProducto(boton) {
        console.log('Intentando agregar producto...');
        
        // Verificar si el usuario está logueado
        if (!this.usuarioLogueado()) {
            console.log('Usuario NO logueado - Mostrando mensaje de login');
            this.mostrarMensajeLogin();
            return;
        }
        
        console.log('Usuario logueado - Continuando con agregar producto');

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
        this.productos = this.productos.filter(p => p.id !== id);
        this.guardarCarrito();
        this.actualizarContador();
        this.mostrarNotificacion('Producto eliminado del carrito');
    }

    vaciarCarrito() {
        this.productos = [];
        this.guardarCarrito();
        this.actualizarContador();
        this.mostrarNotificacion('Carrito vaciado');
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

    mostrarNotificacion(mensaje) {
        // Crear notificación temporal
        const notificacion = document.createElement('div');
        notificacion.className = 'notificacion-carrito';
        notificacion.textContent = mensaje;
        notificacion.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #c7a17a;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            z-index: 10000;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transform: translateX(100%);
            transition: transform 0.3s ease;
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
                document.body.removeChild(notificacion);
            }, 300);
        }, 3000);
    }

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

// Función para mostrar el carrito (si se necesita)
function mostrarCarrito() {
    const productos = window.carrito.obtenerProductos();
    const total = window.carrito.obtenerTotal();
    
    if (productos.length === 0) {
        alert('El carrito está vacío');
        return;
    }

    let mensaje = 'Productos en el carrito:\n\n';
    productos.forEach(producto => {
        mensaje += `• ${producto.nombre} - Cantidad: ${producto.cantidad} - $${producto.precio.toLocaleString()}\n`;
    });
    mensaje += `\nTotal: $${total.toLocaleString()}`;
    
    alert(mensaje);
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