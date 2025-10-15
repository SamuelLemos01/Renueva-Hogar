// Clase para manejar el checkout
class Checkout {
    constructor() {
        this.carrito = window.carrito;
        this.init();
    }

    init() {
        this.cargarProductos();
        this.cargarEventListeners();
        this.actualizarTotales();
    }

    cargarProductos() {
        const contenedor = document.getElementById('checkout-productos');
        const productos = this.carrito.obtenerProductos();
        
        if (!contenedor) {
            return;
        }
        
        if (productos.length === 0) {
            this.mostrarCarritoVacio(contenedor);
            return;
        }
        
        contenedor.innerHTML = productos.map(producto => `
            <div class="checkout-item">
                <div class="checkout-item-imagen">
                    <img src="../${producto.imagen}" alt="${producto.nombre}">
                </div>
                <div class="checkout-item-info">
                    <h4 class="checkout-item-nombre">${producto.nombre}</h4>
                    <div class="checkout-item-cantidad">Cantidad: ${producto.cantidad}</div>
                    <div class="checkout-item-precio">${this.formatearPrecio(producto.precio * producto.cantidad)}</div>
                </div>
            </div>
        `).join('');
    }

    mostrarCarritoVacio(contenedor) {
        contenedor.innerHTML = `
            <div class="checkout-vacio">
                <i class="fa-solid fa-cart-shopping"></i>
                <h3>Tu carrito está vacío</h3>
                <p>Agrega algunos productos para continuar</p>
                <button class="btn-seguir" onclick="window.location.href='catalogo.php'">
                    <i class="fa-solid fa-arrow-left"></i>
                    Ir al catálogo
                </button>
            </div>
        `;
    }

    cargarEventListeners() {
        const formulario = document.getElementById('formulario-checkout');
        if (formulario) {
            formulario.addEventListener('submit', (e) => {
                e.preventDefault();
                this.procesarCheckout();
            });
        }
    }

    procesarCheckout() {
        const productos = this.carrito.obtenerProductos();
        
        if (productos.length === 0) {
            this.mostrarNotificacion('Tu carrito está vacío', 'error');
            return;
        }
        
        // Obtener datos del formulario
        const datos = {
            nombre: document.getElementById('nombre').value.trim(),
            apellido: document.getElementById('apellido').value.trim(),
            telefono: document.getElementById('telefono').value.trim(),
            email: document.getElementById('email').value.trim(),
            direccion: document.getElementById('direccion').value.trim(),
            notas: document.getElementById('notas').value.trim()
        };
        
        // Validar datos
        if (!this.validarDatos(datos)) {
            return;
        }
        
        // Guardar solicitud en la base de datos
        this.guardarSolicitud(datos, productos);
    }
    
    guardarSolicitud(datos, productos) {
        // Primero abrir WhatsApp
        this.abrirWhatsApp(datos, productos);
        
        // Luego guardar en la base de datos (sin esperar respuesta)
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../php/guardar_solicitud.php';
        form.style.display = 'none';
        
        // Agregar campos al formulario
        form.appendChild(this.crearInputOculto('nombre', datos.nombre));
        form.appendChild(this.crearInputOculto('apellido', datos.apellido));
        form.appendChild(this.crearInputOculto('telefono', datos.telefono));
        form.appendChild(this.crearInputOculto('email', datos.email));
        form.appendChild(this.crearInputOculto('direccion', datos.direccion));
        form.appendChild(this.crearInputOculto('notas', datos.notas));
        form.appendChild(this.crearInputOculto('productos', JSON.stringify(productos)));
        
        // Agregar formulario al body y enviarlo
        document.body.appendChild(form);
        form.submit();
    }
    
    crearInputOculto(name, value) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        return input;
    }

    validarDatos(datos) {
        if (!datos.nombre || !datos.apellido || !datos.telefono || !datos.email || !datos.direccion) {
            this.mostrarNotificacion('Por favor completa todos los campos requeridos', 'error');
            return false;
        }
        
        // Validar email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(datos.email)) {
            this.mostrarNotificacion('Por favor ingresa un email válido', 'error');
            return false;
        }
        
        // Validar teléfono (al menos 10 dígitos)
        const telefonoRegex = /^\d{10,}$/;
        if (!telefonoRegex.test(datos.telefono.replace(/\s/g, ''))) {
            this.mostrarNotificacion('Por favor ingresa un teléfono válido (mínimo 10 dígitos)', 'error');
            return false;
        }
        
        return true;
    }

    abrirWhatsApp(datos, productos) {
        // Crear mensaje
        const mensaje = this.generarMensaje(datos, productos);
        
        // Codificar el mensaje para URL
        const mensajeCodificado = encodeURIComponent(mensaje);

        //Numero
        const numeroWhatsApp = '573167654864'; 
        
        // Crear URL de WhatsApp
        const urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${mensajeCodificado}`;
        
        // Abrir WhatsApp en nueva ventana
        window.open(urlWhatsApp, '_blank');
        
        // Mostrar notificación de éxito
        this.mostrarNotificacion('Redirigiendo a WhatsApp', 'success');
    }

    generarMensaje(datos, productos) {
        // Lista de productos
        const listaProductos = productos.map(p => `${p.nombre} (x${p.cantidad})`).join(', ');
        
        // Calcular totales
        const subtotal = productos.reduce((total, p) => total + (p.precio * p.cantidad), 0);
        const envio = subtotal > 500000 ? 0 : 15000;
        const total = subtotal + envio;
        
        // Construir mensaje
        let mensaje = `Hola, quiero comprar los siguientes productos:\n\n`;
        
        mensaje += `*PRODUCTOS:*\n`;
        productos.forEach(p => {
            mensaje += `• ${p.nombre} (Cantidad: ${p.cantidad})\n`;
        });
        
        mensaje += `\n*RESUMEN:*\n`;
        mensaje += `Subtotal: ${this.formatearPrecio(subtotal)}\n`;
        mensaje += `Envío: ${envio === 0 ? 'Gratis' : this.formatearPrecio(envio)}\n`;
        mensaje += `*Total: ${this.formatearPrecio(total)}*\n`;
        
        mensaje += `\n*MIS DATOS:*\n`;
        mensaje += `Nombre: ${datos.nombre} ${datos.apellido}\n`;
        mensaje += `Teléfono: ${datos.telefono}\n`;
        mensaje += `Email: ${datos.email}\n`;
        mensaje += `Dirección: ${datos.direccion}\n`;
        
        if (datos.notas) {
            mensaje += `\n*NOTAS ADICIONALES:*\n${datos.notas}\n`;
        }
        
        mensaje += `\nQuedo atento a cualquier duda. ¡Gracias!`;
        
        return mensaje;
    }

    actualizarTotales() {
        const productos = this.carrito.obtenerProductos();
        const subtotal = productos.reduce((total, producto) => total + (producto.precio * producto.cantidad), 0);
        const envio = subtotal > 500000 ? 0 : 15000;
        const total = subtotal + envio;
        
        const subtotalEl = document.getElementById('checkout-subtotal');
        const envioEl = document.getElementById('checkout-envio');
        const totalEl = document.getElementById('checkout-total');
        
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
}

// Inicializar checkout cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    // Verificar que el carrito esté inicializado
    if (window.carrito) {
        window.checkout = new Checkout();
    }
});
