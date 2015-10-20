<?php

	$order = get_sub_field('choose');
	global $bgImgID; ?>

	<div class="halfs"><?php
		if(get_sub_field('repeater')) :
			$n = 1;
			while(have_rows('repeater')) : the_row();

				echo '<div ';

					// Define Order:  bs=Big-Small || sb=Small-Big
					if($order == 'bs') {
						if($n == 1) {
							echo 'class="big" ';
						} elseif($n == 2) {
							echo 'class="small" ';
						}
					} elseif($order == 'sb') {
						if($n == 1) {
							echo 'class="small" ';
						} elseif($n == 2) {
							echo 'class="big" ';
						}
					}


					// Background Choose:  Img or Color
					if(get_sub_field('bg_choose') == 'img') {

						$img = get_sub_field('bg_img');
						if( !empty($img) ) {
							$img_med = $img['sizes']['medium'];
							$img_large = $img['sizes']['large'];
							$img_larger = $img['sizes']['larger'];

							echo 'id="bgImg_'. $bgImgID .'">';

							echo '<style>
								#bgImg_'.$bgImgID.' {background-image: url(' . $img_med . ');}';
								if($img_med) { echo ' @media (min-width: 600px) { #bgImg_'.$bgImgID.' {background-image: url(' . $img_large . ');} }'; }
								if($img_large) { echo ' @media (min-width: 1024px) { #bgImg_'.$bgImgID.' {background-image: url(' . $img_larger . ');} }'; }
							echo '</style>';
						} else {
							echo '>';
						}

					} elseif(get_sub_field('bg_choose') == 'clr') {
						echo 'style="background-color:'. get_sub_field('bg_clr') .';">';

					} else { 	// Really rare fallback
						echo '>';
					}


					// Content Choose:  Img or Content
					if(get_sub_field('ctt_chose') == 'img') {

						$cttImg = get_sub_field('img');
						echo '<div class="txt" style="text-align:center;">';
						echo wp_get_attachment_image( $cttImg, 'large' );
						echo '</div>';

					} elseif(get_sub_field('ctt_chose') == 'txt') {
						echo '<div class="txt">'.get_sub_field('content').'</div>';
					}



				echo '</div>';
				$bgImgID++;
				$n++;
			endwhile;
		endif; ?>
	</div>
