<?php get_header(); ?>
<?php
	$testimonial_args = array(
		'post_type' => 'testimonial',
		'meta_key'			=> 'category',
		'orderby'			=> 'meta_value',
		'order'				=> 'DESC'
	);
	$testimonial_posts = new WP_Query($testimonial_args);
?>

@include( 'templates/components/subpage-header2' )

<?php if (have_posts()) :while ( have_posts() ) : the_post(); ?>
   

<section id="" class="block-page block-page--testimonials" role="main" >
	<div class="grid__container">
		<h1 class="block-page__headline"><?php the_title(); ?></h1>

		<?php if(get_the_content()): ?>
			<div class="block-page__content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
		<div class="grid">
			<?php
			   if($testimonial_posts->have_posts()) : 
			   	$counter = 0;
			   	$testimonials_count = $testimonial_posts->found_posts;
			      while($testimonial_posts->have_posts()) : 
			         $testimonial_posts->the_post();			    
			?><!-- 
			 -->
			 <div class="grid__item">
			 @include( 'templates/cards/testimonial-item')
			 </div><!-- 
			 --><?php
			 		$counter ++;
			      endwhile;
			   else: 
			?>
			    Oops, there are no testimonials.
			<?php
			   endif;
			   wp_reset_postdata();
			?>	
			
		</div>
	</div>
</section>

<?php endwhile; else : ?>
<p>Sorry no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>