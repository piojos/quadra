
<?php wp_footer(); ?>
<footer>
	<div>
		<?php the_field('address', 'option'); ?>
	</div><?php

	if(have_rows('menu', 'option')): ?>
	<div><?php
		while(have_rows('menu', 'option')): the_row(); ?>
			<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></a><?php
		endwhile; ?>
	</div><?php
	endif;

	if(have_rows('redes', 'option')): ?>
	<div><?php
		while(have_rows('redes', 'option')): the_row(); ?>
			<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></a><?php
		endwhile; ?>
	</div><?php
	endif; ?>

	<div>
		<img src="<?php the_field('tiny_logo', 'option'); ?>">
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
</html>
