<?php
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<section id="block-hero--<?= $hero_id ?>" class="block-hero">
	<div class="grid__super-container" style="background-image: url(<?= $backgroundImg[0] ?>);">
		<video autoplay muted loop id="block-hero__bg-video" class="block-hero__bg-video">
		  <source src="/wp-content/themes/blankslate/assets/video/bg.mp4" type="video/mp4">
		</video>

		<div class="grid__container">
			<div class="block-hero__content" >
				<h2 class="block-hero__headline"><span><?php the_field('hero_headline'); ?></span></h2>
			</div>
		</div>

		

		<div class="block-hero__slideshow" style="display:none;" >
		    @if( $hero_images )
					    <div class="block-hero__slider slider" >
					        @foreach( $hero_images as $image )
					            <div>
					            	<img data-lazy="{{$image['url']}}" alt="{{the_title()}}">
					            </div>
					        @endforeach
					    </div>
			@endif
		</div>	
	</div>
</section>