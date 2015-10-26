<?php

$n = 1;
while(have_rows('levels')) : the_row();

	$post_object = get_sub_field('sel_post');
	if( $post_object ):

		$post = $post_object;
		setup_postdata( $post );
		$image = get_field('img_areas'); ?>

		<div class="lightbox" id="modal<?php echo $n++; ?>">
			<button class="prev_btn" onclick="$.fancybox.prev(true)"/><img src="<?php bloginfo('template_url'); ?>/img/next.svg"></button>
			<a href="javascript:void(0)" onclick="$.fancybox.close(true)" class="close"><div></div><div></div></a>
			<div class="quickview">
				<div class="wrap">
					<div class="contain">
						<div class="tag"><?php

							if(get_field('areas')) :
								echo '<div class="level_list"><ul>';
								while (have_rows('areas')) : the_row();
									echo '<li><span style="background-color: '.get_sub_field('color').';"></span><p>'.get_sub_field('title').'</p></li>';
								endwhile;
								echo '</ul></div>';
							endif; ?>

							<div class="level_name"><p><?php the_title(); ?></p></div>

							<div class="north">
								<img src="<?php bloginfo('template_url'); ?>/img/north.svg" alt="quadra">
							</div>
						</div>

						<div class="image">
							<picture>
								<img class="full_width_image"
									 src="<?php echo $image['sizes']['larger']; ?>"
									 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
									 alt="<?php echo $image['alt']; ?>" />
							</picture>
						</div>
					</div>
					<button class="next_btn" onclick="$.fancybox.next(true)"/><img src="<?php bloginfo('template_url'); ?>/img/next.svg"></button>
				</div>
			</div>
		</div><?php

		wp_reset_postdata();
	endif;

endwhile; ?>




<script type="text/javascript">
	$( "a.open" ).click(function() {
		$( ".lightbox, .distribucion" ).toggleClass( "show" );
	});
	$( "a.close" ).click(function() {
		$( ".lightbox, .distribucion" ).toggleClass( "show" );
	});
</script>
