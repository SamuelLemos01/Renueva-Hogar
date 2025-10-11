<?php
// Incluir header helper
require_once '../includes/header_helper.php';
incluirHeader('Quienes Somos', '../', ['../assets/css/pages.css']);
?>

	<section class="contenedor categorias-principales" id="valores">
		<section class="valores-section">
			<h2 class="valores-titulo">Nuestros Valores</h2>

			<div class="valores-container">
				<div class="valor-card">
					<div class="valor-icon">
						<i class="fa-regular fa-hand-pointer"></i>
					</div>
					<h3 class="valor-titulo">Misión</h3>
					<p class="valor-texto">En Renueva Hogar, nuestra misión es transformar espacios en hogares con muebles artesanales de la más alta calidad. Nos comprometemos a crear piezas duraderas que combinen funcionalidad, estética y sostenibilidad.</p>
				</div>

				<div class="valor-card">
					<div class="valor-icon">
						<i class="fa-solid fa-eye"></i>
					</div>
					<h3 class="valor-titulo">Visión</h3>
					<p class="valor-texto">Aspiramos a convertirnos en el referente regional en mueblería artesanal, destacándonos por la innovación, el compromiso con prácticas sostenibles y la excelencia en servicio al cliente.</p>
				</div>

				<div class="valor-card">
					<div class="valor-icon">
						<i class="fa-solid fa-scale-balanced"></i>
					</div>
					<h3 class="valor-titulo">Valores</h3>
					<p class="valor-texto">Honestidad, calidad, trabajo en equipo, pasión por el diseño y atención personalizada en cada pieza artesanal.</p>
				</div>
			</div>
		</section>

		<section class="contenedor historia-section">
			<div class="historia-container">
				<div class="historia-card">
					<img src="../assets/images/portada.jpg" alt="Foto fundadores" class="historia-imagen">
					<h3 class="historia-titulo">Nuestra Historia</h3>
					<p class="historia-texto">Somos una familia apasionada por crear espacios llenos de calidez y diseño. Con años de experiencia en mueblería artesanal, nuestro taller nació del amor por el trabajo bien hecho.</p>
					<p class="historia-texto">Cada mueble que diseñamos refleja nuestra historia, dedicación y compromiso con quienes nos eligen. Así comenzó Renueva Hogar, y hoy seguimos creciendo junto a ustedes.</p>
				</div>
			</div>
		</section>
	</section>

<?php incluirFooter('../'); ?>