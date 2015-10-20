<div class="title" <?php

	$img = get_sub_field('bg_img');
	$titImgID = A;
	if( !empty($img) ) {
		$img_med = $img['sizes']['medium'];
		$img_large = $img['sizes']['large'];
		$img_larger = $img['sizes']['larger'];
		$img_largest = $img['sizes']['largest'];
		$img_huge = $img['url'];

		echo 'id="titleBgImg_'. $titImgID .'">';

		echo '<style>
			#titleBgImg_'.$bgImgID.' {background-image: url(' . $titImgID . ');}';
			if($img_med) { echo ' @media (min-width: 600px) { #titleBgImg_'.$titImgID.' {background-image: url(' . $img_large . ');} }'; }
			if($img_large) { echo ' @media (min-width: 1024px) { #titleBgImg_'.$titImgID++.' {background-image: url(' . $img_larger . ');} }'; }
			if($img_larger) { echo ' @media (min-width: 1400px) { #titleBgImg_'.$A.' {background-image: url(' . $img_largest . ');} }'; }
			if($img_largest) { echo ' @media (min-width: 1800px) { #titleBgImg_'.$A++.' {background-image: url(' . $img_huge . ');} }'; }
		echo '</style>';

	} else {
		echo '>';
	} ?>

	<div><?php

		if(get_sub_field('choose') == 'txt') {
			the_sub_field('title');
		} elseif(get_sub_field('choose') == 'img') {
			$cttImg = get_sub_field('img');
			echo wp_get_attachment_image( $cttImg, 'large' );
		} ?>

	</div>
</div>
