// Slider mejorado que maneja correctamente el desplazamiento
document.addEventListener('DOMContentLoaded', function() {
    
    // Función para configurar un slider
    function setupSlider(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return;
        
        const sliderContainer = section.querySelector('.products-slider-container');
        const productsGrid = section.querySelector('.products-grid');
        const products = productsGrid.querySelectorAll('.product-card');
        
        // Solo hacer slider si hay más de 3 productos
        if (products.length <= 3) return;
        
        let currentSlide = 0;
        const productsPerSlide = 3; 
        const totalSlides = products.length - productsPerSlide + 1;
        
        console.log(`Total productos: ${products.length}, Total slides: ${totalSlides}`);
        
        // Configurar el contenedor
        sliderContainer.style.overflow = 'hidden';
        sliderContainer.style.position = 'relative';
        
        // Configurar el grid
        productsGrid.style.display = 'flex';
        productsGrid.style.transition = 'transform 0.3s ease';
        productsGrid.style.gap = '2rem';
        
        // Configurar cada producto para que ocupe exactamente 1/3 del ancho visible
        products.forEach(product => {
            product.style.width = 'calc(33.333% - 1.33rem)';
            product.style.flexShrink = '0';
            product.style.minWidth = 'calc(33.333% - 1.33rem)';
        });
        
        // Crear botones de navegación
        const prevBtn = document.createElement('button');
        prevBtn.innerHTML = '‹';
        prevBtn.style.cssText = `
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: #c7a17a;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            z-index: 10;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        `;
        
        const nextBtn = document.createElement('button');
        nextBtn.innerHTML = '›';
        nextBtn.style.cssText = `
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: #c7a17a;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            z-index: 10;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        `;
        
        sliderContainer.appendChild(prevBtn);
        sliderContainer.appendChild(nextBtn);
        
        // Función para actualizar el slider
        function updateSlider() {
            const productWidth = 33.333;
            const translateX = -currentSlide * productWidth;
            
            productsGrid.style.transform = `translateX(${translateX}%)`;
            
            console.log(`Slide ${currentSlide + 1}/${totalSlides}: translateX = ${translateX}%`);
            
            // Deshabilitar botones en extremos
            prevBtn.disabled = currentSlide === 0;
            nextBtn.disabled = currentSlide >= totalSlides - 1;
            
            // Cambiar opacidad para indicar estado
            prevBtn.style.opacity = prevBtn.disabled ? '0.5' : '1';
            nextBtn.style.opacity = nextBtn.disabled ? '0.5' : '1';
        }
        
        // Event listeners
        prevBtn.addEventListener('click', () => {
            if (currentSlide > 0) {
                currentSlide--;
                updateSlider();
            }
        });
        
        nextBtn.addEventListener('click', () => {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
                updateSlider();
            }
        });
        
        // Inicializar
        updateSlider();
    }
    
    // Configurar todos los sliders
    setupSlider('destacados');
    setupSlider('vendidos');
    setupSlider('novedades');
});