<?php
get_header();
$image = get_field('img_areas');
while (have_posts()) : the_post(); ?>

<div class="quickview">
	<div class="wrap">
		<div class="contain">
			<div class="tag"><?php
				if(get_field('areas')) : ?>
				<div class="level_list">
					<ul><?php
						while (have_rows('areas')) : the_row(); ?>
						<li>
							<span style="background-color: <?php the_sub_field('color'); ?>;"></span>
							<p><?php the_sub_field('title'); ?></p>
						</li><?php
						endwhile; ?>
					</ul>
				</div><?php
				endif; ?>

				<div class="level_name"><?php the_title(); ?></div>

				<div class="north">
					<img src="<?php bloginfo('template_url'); ?>/img/north.svg" alt="quadra">
				</div>
			</div>

			<picture>
				<img class="full_width_image"
					 src="<?php echo $image['sizes']['larger']; ?>"
					 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
					 alt="<?php echo $image['alt']; ?>" />
			</picture>
			<!-- <div class="image">
				<img src="img/n22.jpg">
			</div> -->
		</div>
		<button class="next_btn" onclick="$.fancybox.next(true)"><img src="<?php bloginfo('template_url'); ?>img/next.svg"></button>
	</div>
</div><?php

endwhile;
get_footer(); ?>
