<?php
	$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$images = get_field('gallery');
?>
<div class="card-gallery-item" >
    <div class="card-gallery-item__background" style="background-image:url(<?= $backgroundImg[0] ?>);">
    	
    </div>
    <div class="card-gallery-item__details">
    	<h2 class="card-gallery-item__title"><span class="card-gallery-item__name"><?= the_title() ?></span><span class="card-gallery-item__label">family</span></h2>
    </div>
</div>
<?php if( $images ): ?>
    <div class="block-gallery__slider-backdrop" style="display: none;"  >
	    <div class="block-gallery__slider-container" >
	    	<div class="block-gallery__slider slider" >
		        <?php foreach( $images as $image ): ?>
		    
		            <div>
		            	<img data-lazy="<?= $image['url']?>" alt="<?= the_title()?>">
		            </div>
		        <?php endforeach; ?>
		    </div>
	    </div>
	    <a class="block-gallery__slider-close action--hide-gallery">X</a>
    </div>
<?php endif; ?>
