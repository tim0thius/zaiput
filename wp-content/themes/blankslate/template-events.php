<?php

    /*
        Template Name: Events
     */

    get_header();
?>
@include( 'templates/components/subpage-header2' )

<section id="block-announcement-tabs ?>" class="block-page">
	<div class="grid__container">
		<h1 class="block-page__headline">Events</h1>
		<div class="block-vertical-tabs" >
			<div class="grid">
              <div class="grid__item one-whole">	
				 <div class="block-vertical-tabs__container">
				 	<div class="block-vertical-tabs__content active" id="news" >
				 		<!-- News -->
				 		<div class="grid">

<?php
    $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
    query_posts( 
        array ( 
            'post_type' => 'announcement',
		'meta_key'		=> 'event_date',
        'orderby'   => 'meta_value_num',
		// 'meta_value'	=> 'event',
		'orderby' => 'publish_date',
    	'order' => 'DESC',
        'posts_per_page' => '10',
        'meta_query' => array(
                'key'     => 'announcement_type',
                'compare' => '=',
                'value'   => 'event',
        ),
        'paged' => $paged 
        ) 
        );      
        // The Loop
        while ( have_posts() ) : the_post(); ?><!-- 
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
				 --><?php endwhile; 


        echo '<div class="grid__item one-whole pagination" >' . paginate_links() . '</div>';
        // Reset Query
        wp_reset_query();
    ?>
    <style>
          .pagination, .pagination nav {
              width: 100%;;
              display: flex;
              justify-content: center;
          }
          .pagination .page-numbers {
                text-decoration: none;
                margin: 0 10px;
                text-align: center;
            }

        </style>

<?php

?>

				 		</div>
				 	</div>
				 </div>
                 </div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>