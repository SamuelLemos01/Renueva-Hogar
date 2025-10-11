<?php
// Conexión a la base de datos de productos
$conexion_productos = mysqli_connect('localhost', 'root', '', 'productos');

// Obtener productos destacados (hasta 8 para probar el slider)
$query_destacados = "SELECT * FROM productos WHERE destacado = 1 LIMIT 8";
$resultado_destacados = mysqli_query($conexion_productos, $query_destacados);
$productos_destacados = mysqli_fetch_all($resultado_destacados, MYSQLI_ASSOC);

// Obtener productos novedades (hasta 8 para probar el slider)
$query_novedades = "SELECT * FROM productos WHERE novedad = 1 LIMIT 8";
$resultado_novedades = mysqli_query($conexion_productos, $query_novedades);
$productos_novedades = mysqli_fetch_all($resultado_novedades, MYSQLI_ASSOC);

// Obtener productos más vendidos (hasta 8 para probar el slider)
$query_vendidos = "SELECT * FROM productos WHERE mas_vendido = 1 LIMIT 8";
$resultado_vendidos = mysqli_query($conexion_productos, $query_vendidos);
$productos_vendidos = mysqli_fetch_all($resultado_vendidos, MYSQLI_ASSOC);

// Función para formatear precio
function formatearPrecio($precio) {
    return '$' . number_format($precio, 0, ',', '.');
}

// Función para obtener la ruta de la imagen
function obtenerRutaImagen($imagen, $categoria) {
    $categoria_lower = strtolower($categoria);
    return "assets/images/$categoria_lower/$imagen";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1.0" />
	<title>Renueva Hogar</title>
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="assets/css/cuadros.css">
</head>

<section class="">
<img src="assets\images\Banner Horizontal RENUEVA HOGAR (2).jpg" alt="Banner Promocional" style="width: 100%; max-height: 1000px; object-fit: cover; display: block;">
    </section>

<body>
	<header>
		<div class="contenedor-barra-navegacion">
			<nav class="barra-navegacion contenedor">
				<div class="contenedor-logo">
					<h1 class="logo"><a href="index.php">Renueva Hogar</a></h1>
				</div>
				<ul class="menu">
					<li><a href="pages/catalogo.php">Productos</a></li>
					<li><a href="pages/Quienes_somos.php">Quienes somos</a></li>
					<li><a href="pages/contactenos.php">Contáctenos</a></li>
				</ul>

				<a href="pages/login.php"><i class="fa-solid fa-user"></i></a>
				<div class="carrito-container">
					<i class="fa-solid fa-basket-shopping" onclick="mostrarCarrito()" style="cursor: pointer;"></i>
					<span class="carrito-contador">0</span>
				</div>				
			</nav>
		</div>
	</header>

	<section class="banner">
		<div class="contenido-banner">
		<section class="">
			<p>Muebles artesanales de calidad</p>
			<h2>Transformamos tu hogar <br /> con diseños únicos</h2>
			<a href="pages/catalogo.php">Descubre nuestros productos</a>
		</section>
		</div>
	</section>
	
	<main class="contenido-principal">
		<section class="contenedor contenedor-caracteristicas">
			<div class="tarjeta-caracteristica">
				<i class="fa-solid fa-plane-up"></i>
				<div class="contenido-caracteristica">
					<span>Envío a nivel departamental</span>
					<p>Realizamos envíos en todo el Huila</p>
				</div>
			</div>
			<div class="tarjeta-caracteristica">
				<i class="fa-solid fa-credit-card"></i>
				<div class="contenido-caracteristica">
					<span>Reembolso</span>
					<p>100% garantía de devolución de dinero</p>
				</div>
			</div>
			<div class="tarjeta-caracteristica">
				<i class="fa-solid fa-gift"></i>
				<div class="contenido-caracteristica">
					<span>Pago con Sistemcrédito</span>
					<p>Ofrecemos productos a crédito</p>
				</div>
			</div>
			<div class="tarjeta-caracteristica">
				<i class="fa-solid fa-location-dot"></i>
				<div class="contenido-caracteristica">
					<span>Punto Físico</span>
					<p>Contamos con un punto físico</p>
				</div>
			</div>
		</section>

		<section class="container top-categories">
				<h1 class="heading-1">Categorías</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Camas</p>
						<span><a href="pages/catalogo.php?categoria=cama#catalogo">Ver más</a></span>
					</div>
					<div class="card-category category-expreso">
						<p>Sillas</p>
						<span><a href="pages/catalogo.php?categoria=silla#catalogo">Ver más</a></span>
					</div>
					<div class="card-category category-capuchino">
						<p>Comedores</p>
						<span><a href="pages/catalogo.php?categoria=comedor#catalogo">Ver más</a></span>
					</div>
					<div class="card-category category-moca">
						<p>Salas</p>
						<span><a href="pages/catalogo.php?categoria=sala#catalogo">Ver más</a></span>
					</div>
					<div class="card-category category-expreso">
						<p>Cajones</p>
						<span><a href="pages/catalogo.php?categoria=cajon#catalogo">Ver más</a></span>
					</div>
					<div class="card-category category-capuchino">
						<p>Closets</p>
						<span><a href="pages/catalogo.php?categoria=closet#catalogo">Ver más</a></span>
					</div>
					<div class="card-category category-moca">
						<p>Tocadores</p>
						<span><a href="pages/catalogo.php?categoria=tocador#catalogo">Ver más</a></span>
					</div>
				</div>
			</section>

			<section class="container top-products">
				<h2 class="heading-1">Algunos de nuestros productos</h2>

				<div class="tabs-container">
					<div class="tab-buttons">
						<a href="#destacados"><button class="tab-btn active" >Destacados</button></a>
						<a href="#vendidos"><button class="tab-btn" >Más Vendidos</button></a>
						<a href="#novedades"><button class="tab-btn" >Novedades</button></a>
					</div>
				</div>

				<!-- Productos Destacados -->
				<div class="products-section" id="destacados">
					<h3 class="section-title">Productos Destacados</h3>
					<div class="products-slider-container">
						<div class="products-grid">
						<?php if (empty($productos_destacados)): ?>
							<div class="no-products">
								<p>No hay productos destacados disponibles en este momento.</p>
							</div>
						<?php else: ?>
							<?php foreach ($productos_destacados as $producto): ?>
								<div class="product-card">
									<div class="product-image">
										<img src="<?php echo obtenerRutaImagen($producto['imagen'], $producto['categoria']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
										<div class="product-overlay">
										</div>
									</div>
									<div class="product-info">
										<span class="product-category"><?php echo htmlspecialchars($producto['categoria']); ?></span>
										<h4 class="product-name"><?php echo htmlspecialchars($producto['nombre']); ?></h4>
										<p class="product-price"><?php echo formatearPrecio($producto['precio']); ?></p>
										<?php if (!empty($producto['descripcion'])): ?>
											<div class="product-description" style="margin-bottom: 10px;"><?php echo htmlspecialchars($producto['descripcion']); ?></div>
										<?php endif; ?>
										<button class="add-to-cart" data-id="<?php echo $producto['id']; ?>" data-nombre="<?php echo htmlspecialchars($producto['nombre']); ?>" data-precio="<?php echo $producto['precio']; ?>" data-imagen="<?php echo obtenerRutaImagen($producto['imagen'], $producto['categoria']); ?>">Añadir al carrito</button>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>

				<!-- Productos Más Vendidos -->
				<div class="products-section" id="vendidos">
					<h3 class="section-title">Productos Más Vendidos</h3>
					<div class="products-slider-container">
						<div class="products-grid">
						<?php if (empty($productos_vendidos)): ?>
							<div class="no-products">
								<p>No hay productos más vendidos disponibles en este momento.</p>
							</div>
						<?php else: ?>
							<?php foreach ($productos_vendidos as $producto): ?>
								<div class="product-card">
									<div class="product-image">
										<img src="<?php echo obtenerRutaImagen($producto['imagen'], $producto['categoria']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
										<div class="product-overlay">
										</div>
									</div>
									<div class="product-info">
										<span class="product-category"><?php echo htmlspecialchars($producto['categoria']); ?></span>
										<h4 class="product-name"><?php echo htmlspecialchars($producto['nombre']); ?></h4>
										<p class="product-price"><?php echo formatearPrecio($producto['precio']); ?></p>
										<?php if (!empty($producto['descripcion'])): ?>
											<div class="product-description" style="margin-bottom: 10px;"><?php echo htmlspecialchars($producto['descripcion']); ?></div>
										<?php endif; ?>
										<button class="add-to-cart" data-id="<?php echo $producto['id']; ?>" data-nombre="<?php echo htmlspecialchars($producto['nombre']); ?>" data-precio="<?php echo $producto['precio']; ?>" data-imagen="<?php echo obtenerRutaImagen($producto['imagen'], $producto['categoria']); ?>">Añadir al carrito</button>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>

				<!-- Productos Novedades -->
				<div class="products-section" id="novedades">
					<h3 class="section-title">Novedades</h3>
					<div class="products-slider-container">
						<div class="products-grid">
						<?php if (empty($productos_novedades)): ?>
							<div class="no-products">
								<p>No hay productos nuevos disponibles en este momento.</p>
							</div>
						<?php else: ?>
							<?php foreach ($productos_novedades as $producto): ?>
								<div class="product-card">
									<div class="product-image">
										<img src="<?php echo obtenerRutaImagen($producto['imagen'], $producto['categoria']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
										<div class="product-overlay">
										</div>
									</div>
									<div class="product-info">
										<span class="product-category"><?php echo htmlspecialchars($producto['categoria']); ?></span>
										<h4 class="product-name"><?php echo htmlspecialchars($producto['nombre']); ?></h4>
										<p class="product-price"><?php echo formatearPrecio($producto['precio']); ?></p>
										<?php if (!empty($producto['descripcion'])): ?>
											<div class="product-description" style="margin-bottom: 10px;"><?php echo htmlspecialchars($producto['descripcion']); ?></div>
										<?php endif; ?>
										<button class="add-to-cart" data-id="<?php echo $producto['id']; ?>" data-nombre="<?php echo htmlspecialchars($producto['nombre']); ?>" data-precio="<?php echo $producto['precio']; ?>" data-imagen="<?php echo obtenerRutaImagen($producto['imagen'], $producto['categoria']); ?>">Añadir al carrito</button>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

			<section class="container testimonials">
				<h1 class="heading-1">Lo que dicen nuestros clientes</h1>
				<p class="testimonials-subtitle">Experiencias reales de quienes ya transformaron sus hogares</p>

				<div class="container-testimonials">
					<div class="card-testimonial">
						<div class="testimonial-image">
							<img src="assets/images/sala/sala13.jpeg" alt="Sala Moderna Entregada" />
							<div class="product-badge">
								<span>Sala Moderna</span>
							</div>
						</div>
						<div class="content-testimonial">
							<h3 class="testimonial-title">Comentario de la venta</h3>
							<p class="testimonial-text">
								"Excelente calidad y acabados. La sala llegó en perfecto estado y el servicio de instalación fue impecable. Superó nuestras expectativas, definitivamente volveremos a comprar."
							</p>
							<div class="testimonial-client">
								<span class="client-name">— María González</span>
								<span class="client-location">Neiva, Huila</span>
							</div>
						</div>
					</div>

					<div class="card-testimonial">
						<div class="testimonial-image">
							<img src="assets/images/comedor/comedor8.jpeg" alt="Comedor Familiar Entregado" />
							<div class="product-badge">
								<span>Comedor Familiar</span>
							</div>
						</div>
						<div class="content-testimonial">
							<h3 class="testimonial-title">Comentario de la venta</h3>
							<p class="testimonial-text">
								"El comedor es hermoso y muy resistente. La madera es de excelente calidad y el diseño encaja perfecto en nuestro hogar. El equipo fue muy profesional en todo el proceso."
							</p>
							<div class="testimonial-client">
								<span class="client-name">— Carlos Ramírez</span>
								<span class="client-location">Pitalito, Huila</span>
							</div>
						</div>
					</div>

					<div class="card-testimonial">
						<div class="testimonial-image">
							<img src="assets/images/closet/closet4.jpeg" alt="Closet Modular Entregado" />
							<div class="product-badge">
								<span>Closet Modular</span>
							</div>
						</div>
						<div class="content-testimonial">
							<h3 class="testimonial-title">Comentario de la venta</h3>
							<p class="testimonial-text">
								"Increíble trabajo artesanal. El closet aprovecha perfectamente el espacio y los detalles son únicos. La entrega fue puntual y el montaje muy cuidadoso."
							</p>
							<div class="testimonial-client">
								<span class="client-name">— Ana Sofía Vargas</span>
								<span class="client-location">Garzón, Huila</span>
							</div>
						</div>
					</div>

					<div class="card-testimonial">
						<div class="testimonial-image">
							<img src="assets/images/cama/cama1.jpeg" alt="Cama King Entregada" />
							<div class="product-badge">
								<span>Cama King</span>
							</div>
						</div>
						<div class="content-testimonial">
							<h3 class="testimonial-title">Comentario de la venta</h3>
							<p class="testimonial-text">
								"La cama es espectacular, muy cómoda y elegante. La calidad de la madera es evidente y el diseño le da un toque especial a nuestro dormitorio. Muy recomendados."
							</p>
							<div class="testimonial-client">
								<span class="client-name">— Roberto Medina</span>
								<span class="client-location">La Plata, Huila</span>
							</div>
						</div>
					</div>
				</div>

				<div class="testimonials-cta">
					<p>¿Quieres ser nuestro próximo cliente satisfecho?</p>
					<a href="pages/catalogo.php" class="btn-testimonials">Mira nuestros productos</a>
				</div>
			</section>
		</main>
	</main>

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
		</div>
	</footer>

	<script
		src="https://kit.fontawesome.com/81581fb069.js"
		crossorigin="anonymous"></script>
	
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/carrito.js"></script>
	<script src="assets/js/slider.js"></script>

</body>

</html>