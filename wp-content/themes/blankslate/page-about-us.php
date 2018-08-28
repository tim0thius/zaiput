<?php get_header(); ?>

<?php
	$team_args = array(
		'page_id' => 349 // 250 for local
	);
	$team_page = new WP_Query($team_args);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole desk--one-half">
				<div class="block-page__content">
					<div class="block-page__content-inner">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="header">
						<h1 class="block-page__headline"><?php the_title(); ?></h1>
						</header>
						<section class="block-page__content">
						<?php the_content(); ?>
						<div class="block-page__links"><?php wp_link_pages(); ?></div>
						</section>
						</article>

					</div>
				</div>
			</div><!-- 
			 --><div class="grid__item one-whole desk--one-half">
				<div class="block-page__imagebox">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div>
			</div>
		</div>
		
	</div>
</section>
<section id="" class="block-page" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole">
				<div class="block-page__content">
					<div class="block-page__content-inner">

<?php
   if($team_page->have_posts()) : 
   	$count = 0;
      while($team_page->have_posts()) : 
         $team_page->the_post();			    
?>
						<?php if( have_rows('team_members') ): ?>
							<?php
								$count = count( get_field( 'team_members' ) );
							?>			
							<div class="block-team-members" id="block-management-members">
								<h3>Management Team</h3>
								<?php while( have_rows('team_members') ): the_row(); 		
									$category = get_sub_field('category');
									$title = get_sub_field('title');
									$image = get_sub_field('avatar');
									$content = get_sub_field('bio');
									?>
									<?php if($category == 'management'): ?>
										@include( 'templates/cards/team-item')
									<?php endif; ?>	
								<?php endwhile; ?>									
							</div>												
							<div class="block-team-members" id="block-advisory-members">
								<h3>Scientific Advisory Board</h3>

								<?php while( have_rows('team_members') ): the_row(); 
									$category = get_sub_field('category');
									$title = get_sub_field('title');
									$image = get_sub_field('avatar');
									$content = get_sub_field('bio');
									?>
									<?php if($category == 'advisory'): ?>
										@include( 'templates/cards/team-item')
									<?php endif; ?>	
								<?php endwhile; ?>									
							</div>
						<?php endif; ?>


<?php
    endwhile; endif;
   wp_reset_postdata();
?>	

					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>