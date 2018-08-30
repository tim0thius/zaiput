<?php
	$news_args = array(
		'post_type' => 'announcement',
		'meta_key'		=> 'announcement_type',
		'meta_value'	=> 'news'
	);
	$news_posts = new WP_Query($news_args);

	$event_args = array(
		'post_type' => 'announcement',
		'meta_key'		=> 'announcement_type',
		'meta_value'	=> 'event'
	);
	$event_posts = new WP_Query($event_args);
?>
<section id="block-announcement-tabs ?>" class="block-page">
	<div class="grid__container">
		<h1 class="block-page__headline">News and Events</h1>
		<div class="block-vertical-tabs" >
			<div class="grid">
				<div class="grid__item one-quarter">
					<ul class="block-vertical-tabs__tab-container">
						<li class="block-vertical-tabs__tab"><a data-tab-target="news" class="action--open-tab active" >Zaiput News</a></li>
						<li class="block-vertical-tabs__tab"><a data-tab-target="events" class="action--open-tab" >Upcoming Events</a></li>							
					</ul>
				</div><!-- 
				 --><div class="grid__item three-quarters">	
				 <div class="block-vertical-tabs__container">
				 	<div class="block-vertical-tabs__content active" id="news" >
				 		<!-- News -->
				 		<div class="grid">
			<?php
			   if($news_posts->have_posts()) : 
			   	$counter = 0;
			   	$news_count = $news_posts->found_posts;
			      while($news_posts->have_posts()) : 
			         $news_posts->the_post();			    
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
					<?php if($counter < $news_count - 1) : ?>
						<div class="card-announcement-item__divider"></div>
					<?php endif; ?>
				</div><!-- 
				 --><?php $counter ++; endwhile; else: ?>
				    There are no news. Please check back later.
				<?php endif; ?>
			</div>
	 	</div>
		<div class="block-vertical-tabs__content" id="events" >
			<!-- Events -->
			<div class="grid">
			<?php
			   if($event_posts->have_posts()) : 
			   	$counter = 0;
			   	$events_count = $event_posts->found_posts;
			      while($event_posts->have_posts()) : 
			         $event_posts->the_post();			    
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
				<?php if($counter < $events_count - 1) : ?>
					<div class="card-announcement-item__divider"></div>
				<?php endif; ?>
						</div><!-- 
						 --><?php $counter ++; endwhile; else: ?>
							    There are no events. Please check back later.
							<?php endif; ?>
						</div>
					</div>			
				 </div>							
				</div>
			</div>	
		</div>
	</div>	
</section>