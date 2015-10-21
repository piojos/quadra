<section class="contact bg_gray">
	<?php if(get_sub_field('title')) {
		echo '<div class="tag">'.get_sub_field('title').'</div>';
	} ?>

	<div class="form"><?php the_sub_field('select_form'); ?></div>

	<?php if(get_sub_field('content')) {
		echo '<div class="txt">'.get_sub_field('content').'</div>';
	} ?>
</section>
