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

<body>
	
	<header>
		<div class="contenedor-barra-navegacion">
			<nav class="barra-navegacion contenedor">
				<div class="contenedor-logo">
					<h1 class="logo"><a href="index.php">Renueva Hogar</a></h1>
				</div>
				<ul class="menu">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="pages/catalogo.php">Productos</a></li>
					<li><a href="pages/Quienes_somos.php">Quienes somos</a></li>
					<li><a href="pages/contactenos.php">Contáctenos</a></li>
				</ul>

				<form class="formulario-busqueda">
					<input type="search" placeholder="Buscar..." />
					<button class="btn-busqueda">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</form>
				<a href="login.php"><i class="fa-solid fa-user"></i></a>
				<i class="fa-solid fa-basket-shopping"></i>
				<a href="http://localhost/Renueva-Hogar-practica/administrador/administrador.php"><i class="fa-regular fa-user"></i></a>
				
				
			</nav>
		</div>
	</header>

	<section class="banner">
		<div class="contenido-banner">
		<section class="">
			<p>Muebles de calidad</p>
			<h2>Fabricamos desde 0 <br /> con amor</h2>
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
				<h1 class="heading-1">Mejores Categorías</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Camas</p>
						
						<span><a href="catalogo.php"> Ver mas</a></span>
					</div>
					<div class="card-category category-expreso">
						
						<p>Muebles</p>
						<span>Ver más</span>
						
					</div>
					<div class="card-category category-capuchino">
						<p>Comedores</p>
						<span>Ver más</span>
					</div>
				</div>
			</section>

			<section class="container top-products">
				<h1 class="heading-1">Mejores Productos</h1>

				<div class="container-options">
					<span class="active">Destacados</span>
					<span>Más recientes</span>
					<span>Mejores Vendidos</span>
				</div>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="assets\images\cama\cama1.jpeg" alt="Cama King" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="assets\images\cajon\cajon6.jpeg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Inglés</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="assets\images\comedor\comedor8.jpeg"
								alt="Cafe Australiano"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cafe Australiano</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.20</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="assets\images\silla\silla.jpeg" alt="Cafe Helado" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Helado</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

		
			<section class="galeria">
			<a href="catalogo.php?categoria=sillas#catalogo" class="galeria-contenedor galeria-img-1">
				<img src="assets\images\silla\silla.jpeg">
				<div class="overlay-galeria">
					<span class="overlay-texto">Ver Sillas</span>
				</div>
			</a>
			<a href="catalogo.php?categoria=mesas#catalogo" class="galeria-contenedor galeria-img-2">
				<img src="assets\images\comedor\comedor.jpeg" >
				<div class="overlay-galeria">
					<span class="overlay-texto">Ver Comedores</span>
				</div>
			</a>
			<a href="catalogo.php?categoria=mesas#catalogo" class="galeria-contenedor galeria-img-2">
				<img src="assets\images\sala\sala.jpeg" >
				<div class="overlay-galeria">
					<span class="overlay-texto">Ver Salas</span>
				</div>
			</a>
			<a href="catalogo.php?categoria=comedores#catalogo" class="galeria-contenedor galeria-img-4">
				<img src="assets\images\cajon\cajon3.jpeg">
				<div class="overlay-galeria">
					<span class="overlay-texto">Ver Cajones</span>
				</div>
			</a>
			<a href="catalogo.php?categoria=comedores#catalogo" class="galeria-contenedor galeria-img-4">
				<img src="assets\images\tocador\tocador.jpeg">
				<div class="overlay-galeria">
					<span class="overlay-texto">Ver Tocadores</span>
				</div>
			</a>
			<a href="catalogo.php?categoria=closets#catalogo" class="galeria-contenedor galeria-img-5">
				<img src="assets\images\closet\closet4.jpeg">
				<div class="overlay-galeria">
					<span class="overlay-texto">Ver Closets</span>
				</div>
			</a>
		
		
		
			
			
			
		</section>

		<section class="container specials">
				<h1 class="heading-1">Especiales</h1>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="assets\images\cajon\cajon9.jpeg" alt="Cafe Irish" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="assets\images\tocador\tocador6.jpeg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Inglés</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="assets\images\sala\sala13.jpeg" alt="Cafe Viena" />
							<span class="discount">-30%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cafe Viena</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.85 <span>$5.50</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="assets\images\silla\silla3.jpeg" alt="Cafe Liqueurs" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Liqueurs</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

			<section class="container blogs">
				<h1 class="heading-1">Últimos Blogs</h1>

				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img src="img/blog-1.jpg" alt="Imagen Blog 1" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Lorem, ipsum dolor sit</h3>
							<span>29 Noviembre 2022</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Iste, molestiae! Ratione et, dolore ipsum
								quaerat iure illum reprehenderit non maxime amet dolor
								voluptas facilis corporis, consequatur eius est sunt
								suscipit?
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/blog-2.jpg" alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Lorem, ipsum dolor sit</h3>
							<span>29 Noviembre 2022</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Iste, molestiae! Ratione et, dolore ipsum
								quaerat iure illum reprehenderit non maxime amet dolor
								voluptas facilis corporis, consequatur eius est sunt
								suscipit?
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/blog-3.jpg" alt="Imagen Blog 3" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Lorem, ipsum dolor sit</h3>
							<span>29 Noviembre 2022</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Iste, molestiae! Ratione et, dolore ipsum
								quaerat iure illum reprehenderit non maxime amet dolor
								voluptas facilis corporis, consequatur eius est sunt
								suscipit?
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
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
</body>

</html>