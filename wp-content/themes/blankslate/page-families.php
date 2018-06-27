<?php get_header(); ?>
<?php
   $args = array('post_type' => 'gallery');
   $category_posts = new WP_Query($args);
?>
<section id="block-gallery--families" class="block-gallery" role="main">
<div class="grid__container">
	<div class="grid grid--narrow">
<!-- slideshows -->

<?php
// $images = get_field('gallery');
// $size = 'full';
?>

<?php

				   if($category_posts->have_posts()) : 
				   	$counter = 0;
				      while($category_posts->have_posts()) : 
				         $category_posts->the_post();			    
				?><!-- 
				 --><div class="grid__item one-third palm--one-whole">
					@include( 'templates/cards/gallery-item' )	
				</div><!-- 
				 --><?php
				 		$counter ++;
				         if($counter == 6){break;}
				      endwhile;
				   else: 
				?>
				    Oops, there are no posts.
				<?php
				   endif;
				?>

	<!-- page content -->
	</div>
</div>
</section>
@include( 'templates/blocks/cta', ['cta_id' => 'session'] )
<section id="content" role="main" style="display:none;" >
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
			<h1 class="entry-title">{{the_title()}} </h1>
		</header>
		<section class="entry-content">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
		</section>
	</article>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>