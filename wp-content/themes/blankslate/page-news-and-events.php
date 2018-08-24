<?php get_header(); ?>
<?php
	$announcement_args = array('post_type' => 'announcement');
	$announcement_posts = new WP_Query($announcement_args);

	$testimonial_args = array('post_type' => 'testimonial');
	$testimonial_posts = new WP_Query($testimonial_args);
?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page block-page--products" role="main" >
	<div class="grid__container">
		<h1 class="block-page__headline">News and Events</h1>
		<div class="grid">
			<?php
			   if($announcement_posts->have_posts()) : 
			   	$counter = 0;
			   	$announcements_count = $announcement_posts->found_posts;
			      while($announcement_posts->have_posts()) : 
			         $announcement_posts->the_post();			    
			?><!-- 
			 --><div class="grid__item one-whole">
				<?php
					$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$placeholderBackgroundImg = get_field('placeholder_image', 'option');

					if(!$backgroundImg){
						$backgroundImg[0] = $placeholderBackgroundImg;
					}
				?>
				<div class="card-announcement-item" >
				    <div class="card-announcement-item__background" style="background-image:url({{$backgroundImg[0]}});">
				    	
				    </div>
				    <div class="card-announcement-item__details">
				    	<h2 class="card-announcement-item__title">{{the_title()}}</h2>
				    	<div class="card-announcement-item__excerpt">{{the_excerpt()}}</div>
				    	<a class="card-announcement-item__link" href="{{ the_permalink()}}">read more</a>
				    </div>
				</div>
				<?php if($counter < $announcements_count - 1) : ?>
					<div class="card-announcement-item__divider"></div>
				<?php endif; ?>
			</div><!-- 
			 --><?php
			      endwhile;
			   else: 
			?>
			    There are no announcements. Please check back later.
			<?php
			   endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>