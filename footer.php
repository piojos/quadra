<footer>
	<div>
		<p>Carretera Nacional, Monterrey, </br>
		Nuevo León, México, 64895 </br></br>

		Quadra Towers by Emblem Capital.</br>

		Derechos Reservados. © 2015</p>
	</div>
	<div>
		<a href="proyecto.php">El proyecto</a>
		<a href="disponibilidad.php">Disponibilidad</a>
		<a href="office.php">Office & Retail</a>
		<a href="contacto">Contacto</a>
	</div>
	<div>
		<a href="#">Facebook</a>
		<a href="#">Instagram</a>
		<a href="#">Twitter</a>
	</div>
	<div>
		<img src="img/logo2.svg">
	</div>
</footer>

<script>
	$('.slider_arrows').unslider({
		fluid: true,
		delay: false,
		speed: 900,
		complete: function() {},
		keys: true
	});

	$('.big_slider').unslider({
		fluid: true,
		delay: 3000,
		keys: false,
		speed: 900
	});

	var unslider = $('.slider_arrows').unslider();

	$('.unslider-arrow').click(function() {
	    var fn = this.className.split(' ')[1];

	    //  Either do unslider.data('unslider').next() or .prev() depending on the className
	    unslider.data('unslider')[fn]();
	});

	$( "a.burger" ).click(function() {
		$( "header" ).toggleClass( "show" );
	});
</script>

</body>
