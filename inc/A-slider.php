<?php

	if(get_sub_field('choose') == 'sld') :

		$images = get_sub_field('gallery');
		$A = 'A';

		echo '<div class="big_slider"><ul>';
		foreach( $images as $img ): ?>
			<li><?php
				$img_med = $img['sizes']['medium'];
				$img_large = $img['sizes']['large'];
				$img_larger = $img['sizes']['larger'];
				$img_largest = $img['sizes']['largest'];
				$img_huge = $img['url'];

				if($img){
					echo '<div id="ftd_img_'. $A .'" class="contain">';

					echo '<style> #ftd_img_'.$A.' {background-image: url(' . $img_med . ');}';
					if($img_med) { echo ' @media (min-width: 600px) { #ftd_img_'.$A.' {background-image: url(' . $img_large . ');} }'; }
					if($img_large) { echo ' @media (min-width: 1024px) { #ftd_img_'.$A.' {background-image: url(' . $img_larger . ');} }'; }
					if($img_larger) { echo ' @media (min-width: 1400px) { #ftd_img_'.$A.' {background-image: url(' . $img_largest . ');} }'; }
					if($img_largest) { echo ' @media (min-width: 1800px) { #ftd_img_'.$A++.' {background-image: url(' . $img_huge . ');} }'; }
					echo '</style>
					</div>';
				} ?>
			</li><?php
		endforeach;
		echo '</ul></div>';


	elseif(get_sub_field('choose') == 'img') :

		echo '<div class="gmap">';
			$image = get_sub_field('img');
			if(get_sub_field('link')) {
				echo '<a href="'.get_sub_field('link').'" target="_blank">';
			} ?>
				<picture>
					<img class="full_width_image"
						 src="<?php echo $image['sizes']['larger']; ?>"
						 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
						 alt="<?php echo $image['alt']; ?>" />
				</picture><?php
			if(get_sub_field('link')) {
				echo '</a>';
			}
		echo '</div>';


	endif; ?>
