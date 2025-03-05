document.addEventListener('DOMContentLoaded', function() {
    const filtros = document.querySelectorAll('.btn-filtro');
    const productos = document.querySelectorAll('.producto');
    const contenedorProductos = document.querySelector('.contenedor-productos');
    
    // Función para filtrar productos
    function filtrarProductos(categoria) {
        // Remover y añadir clase activa a los botones
        filtros.forEach(filtro => {
            filtro.classList.remove('activo');
            if (filtro.dataset.categoria === categoria) {
                filtro.classList.add('activo');
            }
        });
        
        // Ocultar/mostrar productos según la categoría
        let productosVisibles = 0;
        
        productos.forEach(producto => {
            if (categoria === 'todos' || producto.dataset.categoria === categoria) {
                producto.style.display = 'block';
                productosVisibles++;
            } else {
                producto.style.display = 'none';
            }
        });
        
        // Mostrar mensaje si no hay productos
        const sinProductosMsg = document.querySelector('.sin-productos');
        if (productosVisibles === 0) {
            if (!sinProductosMsg) {
                const mensaje = document.createElement('div');
                mensaje.className = 'sin-productos';
                mensaje.innerHTML = `No hay productos en la categoría "${categoria}" por el momento. ¡Vuelve pronto!`;
                contenedorProductos.appendChild(mensaje);
            }
        } else if (sinProductosMsg) {
            sinProductosMsg.remove();
        }
    }
    
    // Comprobar si hay un parámetro de categoría en la URL
    const urlParams = new URLSearchParams(window.location.search);
    const categoriaParam = urlParams.get('categoria');
    
    if (categoriaParam) {
        // Filtrar por la categoría del parámetro
        filtrarProductos(categoriaParam);
    } else {
        // Por defecto, mostrar todos
        filtrarProductos('todos');
    }
    
    // Asignar evento click a cada filtro
    filtros.forEach(filtro => {
        filtro.addEventListener('click', function() {
            const categoria = this.dataset.categoria;
            filtrarProductos(categoria);
        });
    });
});