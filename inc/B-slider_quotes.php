<div class="slider_quotes slider_arrows bg_white" style="background-color:<?php the_sub_field('bg_color'); ?>">
	<ul><?php

		$n = count(get_sub_field('slider'));
		while(have_rows('slider')) : the_row();

			echo '<li><div class="wrap">';
			if(get_sub_field('title')){
				echo '<div class="tag"><p>'.get_sub_field('title').'</p></div>';
			}

			if (get_sub_field('choose') == 'content') {

				if(get_sub_field('content')) {
					echo '<div class="contain '.get_sub_field('cols').'">'.get_sub_field('content').'</div>';
				}


			} elseif (get_sub_field('choose') == 'icons') { ?>

				<ul class="four_col"><?php

					$images = get_sub_field('icons');
					foreach( $images as $image ) {
						echo '<li><img src="'. $image['sizes']['large'] .'"></li>';
					} ?>

				</ul><?php

			}

			if($n == 2){
				echo '<a href="javascript:void(0)" class="unslider-arrow next"><img src="'. get_template_directory_uri() .'/img/next.svg"></a>';
			}

			echo '</div></li>';
		endwhile; ?>

	</ul>
</div>
