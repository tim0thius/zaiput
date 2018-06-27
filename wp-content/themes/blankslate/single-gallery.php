<?php get_header(); ?>
<?php
	$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$images = get_field('gallery');
?>
<section id="block-gallery--families" class="block-gallery" role="main">
	<div class="grid__container">
		<div class="grid grid--narrow">
			<?php if( $images ): ?>
			    <?php foreach( $images as $index=>$image ): ?><!-- 	
			    	 --><div class="grid__item one-third palm--one-whole">	    
				        <div class="card-gallery-item action--show-slideshow" data-index="<?= $index ?>" >
							<div class="card-gallery-item__background" style="background-image:url(<?= $image['url']?>);">
				            </div>
				            <div class="card-gallery-item__details">
						    	<h2 class="card-gallery-item__title"><span class="card-gallery-item__label">open</span><span class="card-gallery-item__name">{{the_title()}}</span><span class="card-gallery-item__label">slideshow</span></h2>
						    </div>
				        </div>
				    </div><!-- 
			     --><?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php if( $images ): ?>
    <div class="block-gallery__slider-backdrop" >
	    <div class="block-gallery__slider-container" >
	    			<div class="block-gallery__slider slider" >
				        <?php foreach( $images as $image ): ?>
				            <div>
				            	<img src="<?= $image['url']?>" alt="<?= the_title()?>">
				            </div>
				        <?php endforeach; ?>
				    </div>	    
	    </div>
	    <a class="component-button--close action--hide-slideshow">X</a>
    </div>
<?php endif; ?>

@include( 'templates/blocks/cta', ['cta_id' => 'session'] )




<!-- Might not keep -->
<section id="content" role="main" style="display: none;" >
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php //get_sidebar(); ?>


<?php get_footer(); ?>