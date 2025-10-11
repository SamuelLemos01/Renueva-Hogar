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