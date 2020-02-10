<?php
	$announcement_args = array(
		'post_type' => 'announcement',
		'orderby' => 'publish_date',
    	'order' => 'DESC'
	);
	$announcement_posts = new WP_Query($announcement_args);

	$testimonial_args = array('post_type' => 'testimonial');
	$testimonial_posts = new WP_Query($testimonial_args);
?>
<section id="block-highlights--<?= $highlights_id ?>" class="block-highlights" role="main" >
		<div class="grid__container">
			<div class="grid">
				<div class="grid__item one-half portable--one-whole">
					<div class="grid">
						<div class="grid__item one-whole">
							<div class="block-highlights__heading"><h3>News & Events</h3></div>
						</div>
					</div>
					<div class="grid grid--scrollable">
							<?php
							   if($announcement_posts->have_posts()) : 
							   	$counter = 0;
							   	$announcements_count = $announcement_posts->found_posts;
							      while($announcement_posts->have_posts()) : 
							         $announcement_posts->the_post();	
							         if(get_field('homepage_feature')):		    
							?><!-- 
							 --><div class="grid__item one-whole">
								<?php
									$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
									$placeholderBackgroundImg = get_field('placeholder_image', 'option');
									$link = get_the_permalink();
									$target = '_self';

									if(get_field('link_override')){
										$link = get_field('link_override');
									}

									if(get_field('new_tab')){
										$target = '_blank';
									}

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
								    	<a target="<?= $target ?>" class="card-announcement-item__link" href="<?= $link ?>">read more</a>
								    </div>
								</div>
								<?php if($counter < $announcements_count - 1) : ?>
									<div class="card-announcement-item__divider"></div>
								<?php endif; ?>
							</div><!-- 
							 --><?php
							 		$counter ++;
							         if($counter == 9){break;}
							     endif;
							      endwhile;
							   else: 
							?>
							    There are no announcements. Please check back later.
							<?php
							   endif;
							    wp_reset_postdata();
							?>
					</div>
					<a href="<?php the_field('more_announcements_link', 'option') ?>" class="component-button component-button--dark">more news & events</a>
				</div><!-- 
				 --><div class="grid__item one-half portable--one-whole">
				 		<div class="grid">
				 			<div class="grid__item one-whole">
				 				<div class="block-highlights__heading"><h3>Testimonials</h3></div>
				 			</div>
				 		</div>
				 		<div class="block-highlights__testimonials-slider">
				 			<?php

							   if($testimonial_posts->have_posts()) : 
							   	$counter = 0;
							   	$testimonials_count = $testimonial_posts->found_posts;
							      while($testimonial_posts->have_posts()) : 
							         $testimonial_posts->the_post();
							         if(get_field('homepage_feature')):				    
							?><!-- 
							 --><div class="block-highlights__testimonials-slide">
								<div class="card-testimonial-item">
									<span class="card-testimonial-item_content">"{{the_field('message')}}"</span>
									<div class="grid grid--full">
										<?php if(get_field('avatar')) : ?>
										<div class="grid__item one-eighth">
											<img class="card-testimonial-item_avatar" src="{{ the_field('avatar') }}" alt="">
										</div><? endif; ?><!-- 
										 --><div class="grid__item seven-eighths">
										 	<div class="card-testimonial-item_meta<?php if(!get_field('avatar')) : ?> no-avatar<? endif; ?>">
												<span class="card-testimonial-item_name">{{the_title()}}</span>
												<span class="card-testimonial-item_subtext">{{ the_field('subtext') }}</span>
											</div>
										</div>
									</div>									
								</div>
							</div><!-- 
							 --><?php
							 		$counter ++;
							         if($counter == 9){break;}
							     endif;
							      endwhile;
							   else: 
							?>
							    Oops, there are no testimonials.
							<?php
							   endif;
							    wp_reset_postdata();
							?>	
						</div>	
						<a href="<?php the_field('testimonials_link', 'option') ?>" class="component-button component-button--dark">more testimonials</a>		
						<div class="grid">
				 			<div class="grid__item one-whole">
				 				<div class="block-highlights__divider"></div>
				 			</div>
				 			<div class="grid__item one-whole">
				 				<div class="block-highlights__publications">
				 					<p class="block-highlights__publications-message" >{{ the_field('publications_text', 'option') }}</p>
				 					<div class="block-highlights__publications-logos">
										<?php if( have_rows('publications_logos', 'option') ): ?>
										    <?php while( have_rows('publications_logos', 'option') ): the_row(); ?>
										    	<?php if(get_sub_field('publication_url')): ?>
										    		<a class="block-highlights__publication_link" href="<?php the_sub_field('publication_url'); ?>">
										    	<?php endif; ?>
										    		<img src="<?php the_sub_field('publication_logo'); ?>" alt="<?php the_sub_field('alt_tag'); ?>" class="block-highlights__publication_logo" />
										    	<?php if(get_sub_field('publication_url')): ?>
										    		</a>
										    	<?php endif; ?>
										    <?php endwhile; ?>
										<?php endif; ?>
				 					</div>			
				 				</div>
				 			</div>
				 		</div>	
				</div>							
			</div>
		</div>
</section>