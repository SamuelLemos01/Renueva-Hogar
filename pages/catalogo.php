<?php
// Conexión a la base de datos de productos
$conexion_productos = mysqli_connect('localhost', 'root', '', 'productos');

// Obtener todos los productos
$query_productos = "SELECT * FROM productos ORDER BY categoria, nombre";
$resultado_productos = mysqli_query($conexion_productos, $query_productos);
$productos = mysqli_fetch_all($resultado_productos, MYSQLI_ASSOC);

// Función para formatear precio
function formatearPrecio($precio) {
    return '$' . number_format($precio, 0, ',', '.');
}

// Función para obtener la ruta de la imagen
function obtenerRutaImagen($imagen, $categoria) {
    $categoria_lower = strtolower($categoria);
    return "../assets/images/$categoria_lower/$imagen";
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Catálogo - Renueva Hogar</title>
		<link rel="stylesheet" href="../assets/css/catalogo.css">
		<link rel="stylesheet" href="../assets/css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	</head>

	<body>
		<header>
			<div class="contenedor-barra-navegacion">
				<nav class="barra-navegacion contenedor">
					<div class="contenedor-logo">
						<h1 class="logo"><a href="../index.php">Renueva Hogar</a></h1>
					</div>
					<ul class="menu">
					<li><a href="catalogo.php">Productos</a></li>
					<li><a href="Quienes_somos.php">Quienes somos</a></li>
					<li><a href="contactenos.php">Contáctenos</a></li>
				</ul>

					<a href="login.php"><i class="fa-solid fa-user"></i></a>				
					<i class="fa-solid fa-basket-shopping"></i>
					<a href="login.php"><i class="fa-regular fa-user"></i></a>
				</nav>
			</div>
		</header>

		<section class="banner-interno">
			<div class="contenido-banner-interno">
			<section class="">
				<p>Descubre nuestra colección</p>
				<h2>Muebles únicos <br /> para cada espacio</h2>
				<a href="#catalogo">Ver productos</a>
			</section>
			</div>
		</section>

		<main class="contenido-principal">
			<section class="contenedor" id="catalogo">
				<h1 class="encabezado-1" style="font-weight: 700;">Nuestros Productos</h1>
				
				<div class="contenedor-filtros">
					<button class="btn-filtro activo" data-categoria="todos">Todos</button>
					<button class="btn-filtro" data-categoria="silla">Sillas</button>
					<button class="btn-filtro" data-categoria="cajon">Cajones</button>
					<button class="btn-filtro" data-categoria="cama">Camas</button>
					<button class="btn-filtro" data-categoria="closet">Closets</button>
					<button class="btn-filtro" data-categoria="comedor">Comedores</button>
					<button class="btn-filtro" data-categoria="sala">Salas</button>
					<button class="btn-filtro" data-categoria="tocador">Tocador</button>
				</div>
				
				<div class="contenedor-productos">
					<?php foreach ($productos as $producto): ?>
						<div class="producto" data-categoria="<?php echo strtolower($producto['categoria']); ?>">
							<div class="imagen-producto">
								<img src="<?php echo obtenerRutaImagen($producto['imagen'], $producto['categoria']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
							</div>
							<div class="detalles-producto">
								<div class="categoria-producto"><?php echo htmlspecialchars($producto['categoria']); ?></div>
								<h3 class="nombre-producto"><?php echo htmlspecialchars($producto['nombre']); ?></h3>
								<div class="precio-producto"><?php echo formatearPrecio($producto['precio']); ?></div>
								<div class="botones-producto">
									<button class="btn-producto btn-carrito">Añadir <i class="fa-solid fa-cart-plus"></i></button>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
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
						<li><a href="../index.php">Inicio</a></li>
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
		</footer>
		<script src="../assets/js/catalogo.js"></script>
	</body>
</html>
