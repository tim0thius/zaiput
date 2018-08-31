<?php
	// $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$product_class= "";
	if(get_field('product_right')){
		$product_class = 'product-right';
	}
?>
<section id="block-hero--<?= $hero_id ?>" class="block-hero block-hero--product-<?= get_the_id() ?>">
	<div class="grid__super-container" style="background-image: url({{the_field('background_image')}});">
	</div>
	<div class="grid__container <?= $product_class ?>">
			<div class="" >
				<div class="grid">
					<?php if(!get_field('product_right')): ?>
						<div class="grid__item one-third palm--one-whole">
							<img class="block-hero__isolated-image" src="{{the_field('isolated_image')}}" alt="">
						</div><!-- 
						 --><div class="grid__item two-thirds palm--one-whole">	
						 <div class="block-hero__content">
						 	<h1 class="block-hero__heading">
						 		<?php the_title(); ?>
						 	</h1>
						 	<div class="block-hero__wysiwyg">
						 		<?php the_content(); ?>
						 	</div>						
						 </div>
						</div>
					<?php else : ?>
						<div class="grid__item two-thirds palm--one-whole">	
						 <div class="block-hero__content">
						 	<h1 class="block-hero__heading">
						 		<?php the_title(); ?>
						 	</h1>
						 	<div class="block-hero__wysiwyg">
						 		<?php the_content(); ?>
						 	</div>						
						 </div>
						</div><!-- 
						 --><div class="grid__item one-third palm--one-whole">
							<img class="block-hero__isolated-image" src="{{the_field('isolated_image')}}" alt="">
						</div> 	
					<?php endif; ?>
				</div>	
			</div>
			<div class="block-hero__divider"></div>
		</div>	

</section>