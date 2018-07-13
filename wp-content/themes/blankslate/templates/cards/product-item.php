<?php
	$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<div class="card-product-item" >
    <div class="card-product-item__background" style="background-image:url({{the_field('homepage_image')}});">
    	
    </div>
    <div class="card-product-item__details">
    	<h2 class="card-product-item__title">{{the_title()}}</h2>
    	<p class="card-product-item__excerpt">{{the_excerpt()}}</p>
    	<a class="card-product-item__link" href="{{ the_permalink()}}">learn more</a>
    </div>
</div>