<?php

get_header();
$bgImgID = A;

while(have_rows('main_flex')): the_row();

	if(get_row_layout() == 'img_slider'):

		// get_template_part('inc/A', 'slider');


	elseif(get_row_layout() == 'info_slider'):

		// get_template_part('inc/B', 'slider_quotes');


	elseif(get_row_layout() == 'halfs'):

		get_template_part('inc/C', 'halfs');


	elseif(get_row_layout() == 'title_bg'):

		// get_template_part('inc/D', 'title');


	elseif(get_row_layout() == 'contact'):

		// get_template_part('inc/E', 'contact');


	elseif(get_row_layout() == 'distribution'):

		// get_template_part('inc/F', 'distribution');


	endif;

endwhile;


get_footer(); ?>
