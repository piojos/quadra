<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta name="author" content="Emblem Capital">

	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/shame.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css">

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/gmaps.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.pack.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-buttons.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/unslider.min.js"></script>
	<script>
		$(function() {
			$(".list a.tab").click(function(event) {
				$(this).parent().addClass("current");
				$(this).parent().siblings().removeClass("current");
				var tab = $(this).attr("href");
				$(".tab-content").not(tab).css("display", "none");
				$(tab).fadeIn();
			});

			// Show/Hide Menu on scroll
			var scrollTop = $(document).scrollTop();
			var header = $('.target').outerHeight();

			$(window).scroll(function() {
				var top = $(document).scrollTop();

				if (top > header){$('.target').addClass('hide');}
				else {$('.target').removeClass('hide');}

				if (top > scrollTop){$('.target').removeClass('visible');}
				else {$('.target').addClass('visible');}

				if (top > scrollTop){$('.target').removeClass('show');}

				scrollTop = $(document).scrollTop();
			});
		});
		$(".fancybox").fancybox({
			prevEffect    : 'fade',
			nextEffect    : 'fade',
			maxHeight    : 700,
			fitToView    : false,
			width        : '100%',
			arrows        : false,
			autoSize    : false,
			closeBtn    : false,
			closeClick    : false,
			openEffect    : 'none',
			closeEffect    : 'none'
		});
	</script>

	<!-- Analytics -->

</head>

<body onload="init()" <?php body_class(); ?> >
	<header class="target">
		<div class="head">
			<a href="javascript:void(0)" class="burger">
				<div></div><div></div><div></div>
			</a>

			<div class="logo">
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
					<img src="<?php the_field('logo', 'option'); ?>" alt="albia">
				</a>
			</div>
		</div>

		<div class="pop">
			<div class="info">
				<?php the_field('content', 'option'); ?>
			</div><?php

			if(have_rows('menu', 'option')): ?>
			<nav>
				<ul class="st-menu"><?php
				while(have_rows('menu', 'option')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></a>
					</li><?php
				endwhile; ?>
				</ul>
			</nav><?php
			endif; ?>
		</div>
	</header>
