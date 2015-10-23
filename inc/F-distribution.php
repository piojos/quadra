<?php /*
	<div style="width:100%; text-align:center; padding:2em;">
		<h1>Distribution</h1>
		<p>This is definitely missing.</p>
	</div>
*/ ?>


<div class="listed_elements" id="tabs">
	<div class="content bg_gray">
		<div class="tag"><p>Plantas</p></div>
		<ul class="column list"><?php
			$n = 1;
			while(have_rows('levels')) : the_row();

				// echo $n++;
				$post_object = get_sub_field('sel_post');
				if( $post_object ):

					$post = $post_object;
					setup_postdata( $post );

						echo '<li><a href="#tab'.$n.'" onclick="event.preventDefault();" class="tab';
						if($n == 1){
							echo ' current">';
						} else {
							echo '">';
						}
						echo '<span>0'.$n++.'</span> '.get_the_title().'</a></li>';

					wp_reset_postdata();
				endif;

			endwhile; ?>
		</ul>
	</div>
	<div class="content">
		<div class="tag"><p>corte</p></div>
		<div class="map"><?php
			$m = 1;
			while (have_rows('levels')) {
				the_row();
				$image = get_sub_field('img'); ?>
				<div id="tab<?php echo $m; ?>" class="tab-content">
					<a href="#modal<?php echo $m++; ?>" rel="first" class="fancybox">
						<picture>
							<img class="full_width_image"
								 src="<?php echo $image['sizes']['larger']; ?>"
								 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
								 alt="<?php echo $image['alt']; ?>" />
						</picture>
					</a>
				</div><?php
			} ?>
		</div>
	</div>
</div>


<script type="text/javascript">
    $( ".open_list" ).click(function() {
        $( ".list, .open_list" ).toggleClass( "show" );
    });
</script>

<?php get_template_part('inc/quickview'); ?>
