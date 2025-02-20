<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Renueva Hogar</title>
		<link rel="stylesheet" href="assets/css/styles.css" />
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
						<li><a href="#">Productos</a></li>
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

		<section class="banner">
			<div class="contenido-banner">
				<p>Muebles de calidad</p>
				<h2>Fabricamos desde 0  <br />  con amor</h2>
				<a href="#valores">Mirar más</a>
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

			<section class="contenedor categorias-principales" id="valores>
				<h1 class="encabezado-1">Nuestros Valores</h1>
				
				<div class="contenedor-valores">
					<div class="tarjeta-valor mision">
						<div class="icono-valor">
							<i class="fa-solid fa-bullseye"></i>
						</div>
						<div class="contenido-valor">
							<h2 class="titulo-valor">Misión</h2>
							<p>En Renueva Hogar, nuestra misión es transformar espacios en hogares con muebles artesanales de la más alta calidad. Nos comprometemos a crear piezas duraderas que combinen funcionalidad, estética y sostenibilidad, garantizando que cada producto refleje el amor y dedicación que ponemos en su fabricación.</p>
						</div>
					</div>
					
					<div class="tarjeta-valor vision">
						<div class="icono-valor">
							<i class="fa-solid fa-binoculars"></i>
						</div>
						<div class="contenido-valor">
							<h2 class="titulo-valor">Visión</h2>
							<p>Aspiramos a convertirnos en el referente regional en mueblería artesanal, destacándonos por la innovación en diseños, el compromiso con prácticas sostenibles y la excelencia en servicio al cliente. Buscamos expandir nuestra presencia manteniendo nuestros valores de calidad y personalización en cada pieza.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="contenedor productos-principales">
				<h1 class="encabezado-1">Ubícanos</h1>
				
				<div class="contenedor-mapa">
					<div class="informacion-contacto">
						<h2 class="titulo-ubicacion">Visítanos en nuestra tienda</h2>
						<p><i class="fa-solid fa-location-dot"></i> Calle 15 #8-45, Neiva, Huila</p>
						<p><i class="fa-solid fa-phone"></i> (608) 865-4321</p>
						<p><i class="fa-solid fa-clock"></i> Lunes a Sábado: 9:00 AM - 6:00 PM</p>
						<p><i class="fa-solid fa-calendar"></i> Domingos: 10:00 AM - 2:00 PM</p>
					</div>
					<div class="mapa">
						<!-- Mapa de Google integrado con iframe -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.730497013387!2d-75.77745612524934!3d2.2543186580017855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e252963051d774d%3A0xca67347fff16ad22!2sMuebler%C3%ADa%20Renueva%20Hogar!5e0!3m2!1ses!2sco!4v1740002837185!5m2!1ses!2sco" width="100%" height="400" style="border:0; border-radius: 1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</section>

			<section class="galeria">
				<img
					src="assets/images/gallery1.jpg"
					alt="Galería Img1"
					class="galeria-img-1"
				/><img
					src="assets/images/gallery2.jpg"
					alt="Galería Img2"
					class="galeria-img-2"
				/><img
					src="assets/images/gallery3.jpg"
					alt="Galería Img3"
					class="galeria-img-3"
				/><img
					src="assets/images/gallery4.jpg"
					alt="Galería Img4"
					class="galeria-img-4"
				/><img
					src="assets/images/gallery5.jpg"
					alt="Galería Img5"
					class="galeria-img-5"
				/>
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
			</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>