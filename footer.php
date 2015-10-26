
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

	$('.slider_arrows').each(function(){
		var $slider = $(this).unslider();
		$(this).find('.unslider-arrow').click(function(event){
			event.preventDefault();
			if ($(this).hasClass('next')) {
				$slider.data('unslider')['next']();
				} else {
				$slider.data('unslider')['prev']();
			};
		});
	});
	
	jQuery(document).ready(function($) {
		var mq = window.matchMedia( "(max-width: 600px)" );

		if (mq.matches) {
			$('.content .map .tab-content > a').removeClass('fancybox');

			$('.column li a').removeClass('tab');

			$(document).on('click', 'a[href^=#]', function(event) {
	  			event.preventDefault();
			});
		}

		else{
			$(".column li .tab").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
			});
		}
	});

	$( "a.burger" ).click(function() {
		$( "header" ).toggleClass( "show" );
	});
</script>

</body>
</html>
