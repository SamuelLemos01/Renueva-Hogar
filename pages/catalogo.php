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
					<a href="../administrador/administrador.php"><i class="fa-regular fa-user"></i></a>
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
							<img src="../assets/images/silla/silla3.jpeg" alt="Silla moderna">
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
							<img src="../assets/images/silla/silla2.jpeg" alt="Silla moderna">
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
							<img src="../assets/images/silla/silla.jpeg" alt="Silla moderna">
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
							<img src="../assets/images/cajon\cajon.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon1.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon2.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon3.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon4.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon5.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon6.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon7.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon8.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon9.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon10.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon11.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon12.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon13.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon14.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cajon\cajon15.jpeg" alt="Mesa de centro moderna">
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
							<img src="../assets/images/cama\cabezon1.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cabezon2.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cabezon3.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cabezon4.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cabezon5.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cabezon6.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cabezon7.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cama.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cama2.jpeg" alt="Cama con cabecero">
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

					<div class="producto" data-categoria="camas">
						<div class="imagen-producto">
							<img src="../assets/images/cama\cama1.jpeg" alt="Cama con cabecero">
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
							<img src="../assets/images/closet\closet.jpeg" alt="Closet moderno">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Closets</div>
							<h3 class="nombre-producto">Closet</h3>
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet1.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet2.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet3.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet4.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet5.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet6.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet7.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet8.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet9.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet10.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet11.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet12.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet13.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet14.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet15.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet16.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet17.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet18.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet19.jpeg" alt="Closet moderno">
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

					<div class="producto" data-categoria="closets">
						<div class="imagen-producto">
							<img src="../assets/images/closet\closet20.jpeg" alt="Closet moderno">
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
							<img src="../assets/images/comedor\comedor.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor1.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor2.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor3.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor5.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor4.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor6.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor7.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor8.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor9.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor10.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor11.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor12.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor13.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor14.jpeg" alt="Comedor moderno">
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

					<div class="producto" data-categoria="comedores">
						<div class="imagen-producto">
							<img src="../assets/images/comedor\comedor15.jpeg" alt="Comedor moderno">
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
							<img src="../assets/images/sala\sala.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala2.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala3.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala4.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala5.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala6.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala7.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala8.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala9.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala10.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala11.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala12.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala13.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala14.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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

					<div class="producto" data-categoria="salas">
						<div class="imagen-producto">
							<img src="../assets/images/sala\sala15.jpeg" alt="Salas ">
						</div>
						<div class="detalles-producto">
							<div class="categoria-producto">Lámparas</div>
							<h3 class="nombre-producto">Sala Minimalista</h3>
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
							<img src="../assets/images/tocador\tocador.jpeg" alt="Silla moderna">
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

					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="../assets/images/tocador\tocador1.jpeg" alt="Silla moderna">
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

					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="../assets/images/tocador\tocador2.jpeg" alt="Silla moderna">
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

					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="../assets/images/tocador\tocador3.jpeg" alt="Silla moderna">
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

					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="../assets/images/tocador\tocador4.jpeg" alt="Silla moderna">
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

					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="../assets/images/tocador\tocador5.jpeg" alt="Silla moderna">
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

					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="../assets/images/tocador\tocador6.jpeg" alt="Silla moderna">
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

					<div class="producto" data-categoria="tocador">
						<div class="imagen-producto">
							<img src="../assets/images/tocador\tocador7.jpeg" alt="Silla moderna">
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
