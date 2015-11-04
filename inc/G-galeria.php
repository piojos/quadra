<section class="contact">
	<div class="galeria">
		<?php $images = get_sub_field('gallery');
			if($images) :
				foreach( $images as $image ): ?>
				<figure>
					<img src="<?php echo $image['sizes']['larger']; ?>"><?php 
					if($image['caption']){ 
						echo '<figcaption>'.$image['caption'];
						if($image['description']){ 
							echo '<p>'.$image['description'].'</p>';
						}
						echo '</figcaption>'; 
					} ?>
				</figure><?php 
				endforeach; 
			endif; ?>
	</div>
</section>
