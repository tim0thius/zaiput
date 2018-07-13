<?php get_header(); ?>
<?php
	global $post;
    $post_slug = $post->post_name;
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

@include( 'templates/blocks/hero--product-page', ['hero_id' => 'product-page'] )
@include( 'templates/blocks/product-tabs', ['product_id' => $post_slug] )

<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>