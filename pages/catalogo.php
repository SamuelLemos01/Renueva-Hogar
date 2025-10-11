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

// Incluir header helper
require_once '../includes/header_helper.php';
incluirHeader('Catálogo', '../', ['../assets/css/pages.css', '../assets/css/catalogo.css']);
?>
	
	<body>
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
								<?php if (!empty($producto['descripcion'])): ?>
									<div class="product-description" style="margin-bottom: 10px;"><?php echo htmlspecialchars($producto['descripcion']); ?></div>
								<?php endif; ?>
								<div class="botones-producto">
									<button class="btn-producto btn-carrito" data-id="<?php echo $producto['id']; ?>" data-nombre="<?php echo htmlspecialchars($producto['nombre']); ?>" data-precio="<?php echo $producto['precio']; ?>" data-imagen="<?php echo obtenerRutaImagen($producto['imagen'], 
									$producto['categoria']); ?>">Añadir <i class="fa-solid fa-cart-plus"></i></button>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>
		</main>
		<script src="../assets/js/catalogo.js"></script>
		<script src="../assets/js/carrito.js"></script>
<?php incluirFooter('../'); ?>

