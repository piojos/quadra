<?php
	get_header();

	get_template_part('inc/slider');
	get_template_part('inc/slider_quotes');
	get_template_part('inc/halfs'); ?>

<div class="slider_quotes">
	<ul>
		<li>
			<div class="wrap">
				<div class="tag"><p>ubicación</p></div>
				<div class="contain">
					<p>Espacios corporativos  para generar las mejores ideas, cultivar
					relaciones estratégicas, e inspirar la realización de proyectos excepcionales. Quadra
					Towers conjuga apariencia y funcionalidad para empresarios y ejecutivos enfocados en su negocio.</p>
				</div>
			</div>
		</li>
	</ul>
</div>

<?php get_template_part('inc/gmap'); ?>

<div class="halfs">
	<div class="big"  style="background-color: #E4E6E9;">
		<div class="txt">
			<p class="trade letter_spacing" style="text-align:center;">
				EMBLEM CAPITAL ES UNA EMPRESA DEDICADA AL DESARROLLO DE PROYECTOS INMOBILIARIOS DE LA MÁS ALTA CALIDAD. SUS PROYECTOS SE CARACTERIZAN POR SU DISEÑO, FUNCIONALIDAD Y EFICIENCIA. EMBLEM  CAPITAL CUENTA CON UN EQUIPO COMPROMETIDO Y CON EXPERIENCIA, OFRECIENDO EXCELENTES SOLUCIONES PARA CADA UNO DE SUS CLIENTES.
			</p>
		</div>
	</div>
	<div class="small"  style="background-image: url(img/emblem.jpg);">
	</div>
</div>


<?php get_footer(); ?>
