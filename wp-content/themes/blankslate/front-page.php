<?php get_header(); ?>

@include( 'templates/blocks/hero', ['hero_id' => 'frontpage', 'hero_images' => get_field('hero_gallery')] )
@include( 'templates/blocks/cta2', ['cta_id' => 'welcome'] )
@include( 'templates/blocks/products--frontpage', ['product_id' => 'main'] )
@include( 'templates/blocks/about--frontpage', ['about_id' => 'frontpage'] )
@include( 'templates/blocks/highlights', ['highlights_id' => 'frontpage'] )
	


<?php get_footer(); ?>