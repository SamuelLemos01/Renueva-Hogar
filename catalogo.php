<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Catálogo - Renueva Hogar</title>
		<link rel="stylesheet" href="assets/css/catalogo.css">
        <link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	
	</head>
	<body>
		<header>
			<div class="contenedor-barra-navegacion">
				<nav class="barra-navegacion contenedor">
					<div class="contenedor-logo">
						<h1 class="logo"><a href="index.php">Renueva Hogar</a></h1>
					</div>
					<ul class="menu">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="catalogo.php">Productos</a></li>
						<li><a href="#">Contáctenos</a></li>
					</ul>

					<form class="formulario-busqueda">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-busqueda">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
					<a href="login.php"><i class="fa-solid fa-user"></i></a>				
					<i class="fa-solid fa-basket-shopping"></i>
				</nav>
			</div>
		</header>

		<main class="contenido-principal">
			<section class="contenedor" id="catalogo">
				<h1 class="encabezado-1" style="font-weight: 700;">Nuestros Productos</h1>
				
				<div class="contenedor-filtros">
					<button class="btn-filtro activo" data-categoria="todos">Todos</button>
					<button class="btn-filtro" data-categoria="sillas">Sillas</button>
					<button class="btn-filtro" data-categoria="cajones">Cajones</button>
					<button class="btn-filtro" data-categoria="camas">Camas</button>
					<button class="btn-filtro" data-categoria="closets">Closets</button>
					<button class="btn-filtro" data-categoria="comedores">Comedores</button>
					<button class="btn-filtro" data-categoria="salas">Salas</button>
					<button class="btn-filtro" data-categoria="tocador">Tocador</button>
				</div>
				
				<div class="contenedor-productos">
					<!-- Producto Silla -->
					<div class="producto" data-categoria="sillas">
						<div class="imagen-producto">
							<img src="assets/images/mesas/mesa.jpeg" alt="Silla moderna">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Sillas</div>
							<h3 class="nombre-producto">Silla Eames Moderna</h3>
							<div class="precio-producto">$289.000</div>
							<div class="medidas-producto">
								<span class="medida">Alto: 82cm</span>
								<span class="medida">Ancho: 46cm</span>
								<span class="medida">Profundidad: 50cm</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>

					<div class="producto" data-categoria="sillas">
						<div class="imagen-producto">
							<img src="assets/images/mesas/mesa.jpeg" alt="Silla moderna">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Sillas</div>
							<h3 class="nombre-producto">Silla Eames Moderna</h3>
							<div class="precio-producto">$289.000</div>
							<div class="medidas-producto">
								<span class="medida">Alto: 82cm</span>
								<span class="medida">Ancho: 46cm</span>
								<span class="medida">Profundidad: 50cm</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
					
					<!-- Producto Mesa -->
					<div class="producto" data-categoria="cajones">
						<div class="imagen-producto">
							<img src="assets/images/mesa1.jpg" alt="Mesa de centro moderna">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Mesas</div>
							<h3 class="nombre-producto">Mesa de Centro Escandinava</h3>
							<div class="precio-producto">$420.000</div>
							<div class="medidas-producto">
								<span class="medida">60x60cm</span>
								<span class="medida">80x80cm</span>
								<span class="medida">100x100cm</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
					<div class="producto" data-categoria="cajones">
						<div class="imagen-producto">
							<img src="assets/images/mesa1.jpg" alt="Mesa de centro moderna">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Mesas</div>
							<h3 class="nombre-producto">Mesa de Centro Escandinava</h3>
							<div class="precio-producto">$420.000</div>
							<div class="medidas-producto">
								<span class="medida">60x60cm</span>
								<span class="medida">80x80cm</span>
								<span class="medida">100x100cm</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
					
					<!-- Producto Cama -->
					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="assets/images/cama1.jpg" alt="Cama con cabecero">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Camas</div>
							<h3 class="nombre-producto">Cama Queen con Cabecero</h3>
							<div class="precio-producto">$1.250.000</div>
							<div class="medidas-producto">
								<span class="medida">Individual</span>
								<span class="medida">Matrimonial</span>
								<span class="medida">Queen</span>
								<span class="medida">King</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
					
					<!-- Producto Closet -->
					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="assets/images/closet1.jpg" alt="Closet moderno">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Closets</div>
							<h3 class="nombre-producto">Closet Modular 3 Puertas</h3>
							<div class="precio-producto">$1.850.000</div>
							<div class="medidas-producto">
								<span class="medida">150x200cm</span>
								<span class="medida">180x220cm</span>
								<span class="medida">200x240cm</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
					
					<!-- Producto Comedor -->
					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="assets/images/comedor1.jpg" alt="Comedor moderno">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Comedores</div>
							<h3 class="nombre-producto">Comedor 6 Puestos en Nogal</h3>
							<div class="precio-producto">$2.500.000</div>
							<div class="medidas-producto">
								<span class="medida">4 Puestos</span>
								<span class="medida">6 Puestos</span>
								<span class="medida">8 Puestos</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
					
					<!-- Producto Lámpara -->
					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="assets/images/lampara1.jpg" alt="Lámpara de pie">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Lámpara de Pie Minimalista</h3>
							<div class="precio-producto">$350.000</div>
							<div class="medidas-producto">
								<span class="medida">Altura: 150cm</span>
								<span class="medida">Ø Pantalla: 30cm</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
				<!-- Producto tocador -->
					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="assets/images/mesas/mesa.jpeg" alt="Silla moderna">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">tocador</div>
							<h3 class="nombre-producto">Silla Eames Moderna</h3>
							<div class="precio-producto">$289.000</div>
							<div class="medidas-producto">
								<span class="medida">Alto: 82cm</span>
								<span class="medida">Ancho: 46cm</span>
								<span class="medida">Profundidad: 50cm</span>
							</div>
							<div class="botones-producto">
								<button class="btn-producto btn-detalles">Ver detalles</button>
								<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
							</div>
						</div>
					</div>
					
				</div>
			</section>
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
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Productos</a></li>
							<li><a href="#">Acerca de Nosotros</a></li>
							<li><a href="#">Contáctanos</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="derechos-autor">
				<p>
					&copy; 2025 Renueva Hogar - Todos los derechos reservados
				</p>
			</div>
		</footer>
		<script src="assets/js/catalogo.js"></script>
	</body>
</html>