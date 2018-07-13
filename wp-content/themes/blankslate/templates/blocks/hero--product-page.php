<?php
// $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<section id="block-hero--<?= $hero_id ?>" class="block-hero">
	<div class="grid__super-container" style="background-image: url({{the_field('background_image')}});">
	</div>
	<div class="grid__container">
			<div class="" >
				<div class="grid">
					<div class="grid__item one-third">
						<img class="block-hero__isolated-image" src="{{the_field('isolated_image')}}" alt="">
					</div><!-- 
					 --><div class="grid__item two-thirds">	
					 <div class="block-hero__content">
					 	<h1 class="block-hero__heading">
					 		<?php the_title(); ?>
					 	</h1>
					 	<div class="block-hero__wysiwyg">
					 		<?php the_content(); ?>
					 	</div>						
					 </div>							
					</div>
				</div>	
			</div>
			<div class="block-hero__divider"></div>
		</div>	

</section>