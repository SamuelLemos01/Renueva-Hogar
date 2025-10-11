<?php
// Conexión a la base de datos de contacto
$conexion_contacto = mysqli_connect('localhost', 'root', '', 'contactos');

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contáctenos - Renueva Hogar</title>

        <link rel="stylesheet" href="../assets/css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
		<link rel="stylesheet" href="../assets/css/contactenos.css">
    </head>	
<section class="">
<img src="http://localhost/Renueva-Hogar/assets/images/Banner%20Horizontal%20RENUEVA%20HOGAR%20(2).jpg" alt="Banner Promocional" style="width: 100%; max-height: 1000px; object-fit: cover; display: block;">
    </section>

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
				</nav>
			</div>
		</header>

		<section class="banner-interno">
			<div class="contenido-banner-interno">
			<section class="">
				<p>¿Necesitas ayuda?</p>
				<h2>Estamos aquí <br /> para atenderte</h2>
				<a href="#contacto">Contáctanos ahora</a>
			</section>
			</div>
		</section>

		<main class="contenido-principal">
			<section class="contenedor productos-principales" id="contacto">
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

			<section class="contenedor formulario-contacto-section">
				<div class="formulario-contacto-container">
					<div class="formulario-header">
						<h2 class="formulario-titulo">Contáctanos</h2>
						<p class="formulario-subtitulo">Estamos aquí para ayudarte. Envíanos tu consulta y te responderemos pronto.</p>
					</div>
					
					<form action="../php/contactenos.php" method="post" class="formulario-contacto">
						<div class="formulario-grupo">
							<label for="nombre_completo" class="formulario-label">
							<i class="fa-solid fa-user-large"></i>
								Nombre completo
							</label>
							<input type="text" name="nombre_completo" id="nombre_completo" class="formulario-input" placeholder="Ingrese su nombre completo" required>
						</div>
						
						<div class="formulario-grupo">
							<label for="email" class="formulario-label">
								<i class="fa-solid fa-envelope"></i>
								Correo electrónico
							</label>
							<input type="email" name="email" id="email" class="formulario-input" placeholder="Ingrese su correo electrónico" required>
						</div>
						
						<div class="formulario-grupo">
							<label for="telefono" class="formulario-label">
								<i class="fa-solid fa-phone"></i>
								Teléfono
							</label>
							<input type="tel" name="telefono" id="telefono" class="formulario-input" placeholder="Ingrese su número de teléfono" required>
						</div>
						
						<div class="formulario-grupo">
							<label for="mensaje" class="formulario-label">
								<i class="fa-solid fa-comment"></i>
								Mensaje
							</label>
							<textarea name="mensaje" id="mensaje" class="formulario-textarea" placeholder="Escriba su mensaje aquí..." required></textarea>
						</div>
						
						<div class="formulario-botones">
							<button type="submit" class="btn-enviar">
								<i class="fa-solid fa-paper-plane"></i>
								Enviar mensaje
							</button>
							<button type="reset" class="btn-limpiar">
								<i class="fa-solid fa-eraser"></i>
								Limpiar formulario
							</button>
						</div>
					</form>
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
		</div>
	</footer>

	<script
		src="https://kit.fontawesome.com/81581fb069.js"
		crossorigin="anonymous"></script>
</body>

</html>
