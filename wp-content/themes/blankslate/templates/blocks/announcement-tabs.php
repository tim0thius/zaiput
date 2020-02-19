<?php
	$news_args = array(
		'post_type' => 'announcement',
		'meta_key'		=> 'announcement_type',
		'meta_value'	=> 'news',
		'orderby' => 'publish_date',
    	'order' => 'DESC',
        'posts_per_page' => '99',
	);
	$news_posts = new WP_Query($news_args);

    // Find todays date in Ymd format.
    // $cutoff_date = date("Y/m/d");

    $today = strtotime("Today");
    $cutoff_date = strtotime("-2 day", $today);
    $recent_cutoff_date = strtotime("-1 month", $today);

    $cutoff_date =  date("Ymd", $cutoff_date);
    $recent_cutoff_date =  date("Ymd", $recent_cutoff_date);

	$event_args = array(
		'post_type' => 'announcement',
		'meta_key'		=> 'event_date',
        'orderby'   => 'meta_value_num',
		// 'meta_value'	=> 'event',
		'orderby' => 'publish_date',
    	'order' => 'DESC',
        'posts_per_page' => '30',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key'     => 'event_date',
                'compare' => '>=',
                'value'   => $cutoff_date,
            ),
            array(
                'key'     => 'announcement_type',
                'compare' => '=',
                'value'   => 'event',
            )
        ),
	);
	$event_posts = new WP_Query($event_args);

    $past_event_args = array(
		'post_type' => 'announcement',
		'meta_key'		=> 'event_date',
        'orderby'   => 'meta_value_num',
		// 'meta_value'	=> 'event',
		'orderby' => 'publish_date',
    	'order' => 'DESC',
        'posts_per_page' => '10',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key'     => 'event_date',
                'compare' => '<=',
                'value'   => $cutoff_date,
            ),
            array(
                'key'     => 'event_date',
                'compare' => '>=',
                'value'   => $recent_cutoff_date,
            ),
            array(
                'key'     => 'announcement_type',
                'compare' => '=',
                'value'   => 'event',
            )
        ),
	);
    $past_event_posts = new WP_Query($past_event_args);
?>
<section id="block-announcement-tabs ?>" class="block-page">
	<div class="grid__container">
		<h1 class="block-page__headline">News and Events</h1>
		<div class="block-vertical-tabs" >
			<div class="grid">
				<div class="grid__item one-quarter palm--one-whole">
					<ul class="block-vertical-tabs__tab-container">
						<li class="block-vertical-tabs__tab"><a data-tab-target="news" class="action--open-tab active" >Zaiput News</a></li>
						<li class="block-vertical-tabs__tab"><a data-tab-target="events" class="action--open-tab" >Events</a></li>							
					</ul>
				</div><!-- 
				 --><div class="grid__item three-quarters palm--one-whole">	
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
            <h4>Upcoming Events</h4>
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
                            <?= the_field('event_date'); ?>
                            <div class="card-announcement-item__excerpt">{{the_excerpt()}}</div>
                            <a target="<?= $target ?>" class="card-announcement-item__link" href="<?= $link ?>">read more</a>
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
            <hr style="border-width: 0 0 1px; height: 0; border-color: #ddd; margin-bottom: 30px;"/>
            <h4>Recent Events</h4>
			<div class="grid">
			<?php
			   if($past_event_posts->have_posts()) : 
			   	$past_counter = 0;
			   	$past_events_count = $past_event_posts->found_posts;
			      while($past_event_posts->have_posts()) : 
			         $past_event_posts->the_post();			    
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
                            <?= the_field('event_date'); ?>
                            <div class="card-announcement-item__excerpt">{{the_excerpt()}}</div>
                            <a target="<?= $target ?>" class="card-announcement-item__link" href="<?= $link ?>">read more</a>
                        </div>
                    </div>
                    <?php if($past_counter < $past_events_count - 1) : ?>
                        <div class="card-announcement-item__divider"></div>
                    <?php endif; ?>
					    </div><!-- 
						 --><?php $past_counter ++; endwhile; else: ?>
							    There are no events. Please check back later.
							<?php endif; ?>
						</div>
                        <a href="/events" >View All Events</a>
					</div>			
				 </div>							
				</div>
			</div>	
		</div>
	</div>	
</section>