<?php get_header(); ?>
<?php
	$testimonial_args = array('post_type' => 'testimonial');
	$testimonial_posts = new WP_Query($testimonial_args);
?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page block-page--testimonials" role="main" >
	<div class="grid__container">
		<h1 class="block-page__headline">Testimonials</h1>
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
							         if($counter == 9){break;}
							      endwhile;
							   else: 
							?>
							    Oops, there are no testimonials.
							<?php
							   endif;
							?>	
		</div>
	</div>
</section>
<?php get_footer(); ?>