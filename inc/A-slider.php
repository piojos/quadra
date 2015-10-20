<?php

	if(get_sub_field('choose') == 'img'){
		$singleImg = get_sub_field('img');
	} else {
		$images = get_sub_field('gallery');
	} ?>

<hr>
<br>

<div class="big_slider">
	<ul><?php
		$A = 'A';
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
		if($singleImg){ ?>
			<picture>
				<img class="full_width_image"
					 src="<?php echo $image['sizes']['larger']; ?>"
					 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
					 alt="<?php echo $image['alt']; ?>" />
			</picture><?php
		} ?>
	</ul>
</div>

<br>
<hr>
