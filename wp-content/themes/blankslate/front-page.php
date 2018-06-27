<?php get_header(); ?>

<?php
   $args = array('post_type' => 'gallery');
   $category_posts = new WP_Query($args);
?>

@include( 'templates/blocks/hero', ['hero_id' => 'frontpage', 'hero_images' => get_field('hero_gallery')] )
@include( 'templates/blocks/cta2', ['cta_id' => 'session'] )
@include( 'templates/blocks/products--frontpage', ['product_id' => 'main'] )
@include( 'templates/blocks/about--frontpage', ['about_id' => 'frontpage'] )
	

<?php get_footer(); ?>