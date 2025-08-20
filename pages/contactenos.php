<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contáctenos - Renueva Hogar</title>

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

			<section class="contenedor">
				<div style="max-width: 800px; margin: 20px auto; background: white; border: 1px solid #ddd; font-family: Arial, sans-serif;">
					<div style="background-color: #f5f5f5; padding: 10px; border-bottom: 1px solid #ddd;">
						<h2 style="margin: 0; text-align: center; font-size: 20px;">Formulario de Contacto</h2>
					</div>
					
					<form action="https://formspree.io/f/xldbvakj" method="post" style="padding: 0;">
						<table style="width: 100%; border-collapse: collapse;">
							<tr style="border-bottom: 1px solid #eee;">
								<td style="width: 35%; padding: 10px; background-color: #f9f9f9; font-weight: bold;">Nombre completo</td>
								<td style="padding: 10px;">
									<input type="text" name="nombres" style="width: 100%; padding: 8px; border: 1px solid #ddd; box-sizing: border-box;" placeholder="Ingrese su Nombre">
								</td>
							</tr>
							
							<tr style="border-bottom: 1px solid #eee;">
								<td style="width: 35%; padding: 10px; background-color: #f9f9f9; font-weight: bold;">Email</td>
								<td style="padding: 10px;">
									<input type="email" name="correo" style="width: 100%; padding: 8px; border: 1px solid #ddd; box-sizing: border-box;" placeholder="Ingrese su Correo">
								</td>
							</tr>
							
							<tr style="border-bottom: 1px solid #eee;">
								<td style="width: 35%; padding: 10px; background-color: #f9f9f9; font-weight: bold;">Apellidos</td>
								<td style="padding: 10px;">
									<input type="text" name="apellidos" style="width: 100%; padding: 8px; border: 1px solid #ddd; box-sizing: border-box;" placeholder="Ingrese su Apellido">
								</td>
							</tr>
							
							<tr style="border-bottom: 1px solid #eee;">
								<td style="width: 35%; padding: 10px; background-color: #f9f9f9; font-weight: bold;">Asunto</td>
								<td style="padding: 10px;">
									<textarea name="message" style="width: 100%; padding: 8px; border: 1px solid #ddd; height: 100px; resize: vertical; box-sizing: border-box;" placeholder="Escriba su mensaje..."></textarea>
								</td>
							</tr>
							
							<tr>
								<td colspan="2" style="text-align: center; padding: 15px;">
									<button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; cursor: pointer; margin-right: 10px;">ENVIAR</button>
									<button type="reset" style="background-color: #f1f1f1; color: #333; border: none; padding: 10px 20px; cursor: pointer;">Limpiar</button>
								</td>
							</tr>
						</table>
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
