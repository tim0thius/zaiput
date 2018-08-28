<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole desk--three-quarters">
				<div class="block-page__content">
					<div class="block-page__content-inner">

						<?php if( have_rows('team_members') ): ?>

							<h3>Management Team</h3>

							<div class="block-team-members">

							<?php while( have_rows('team_members') ): the_row(); 

								
								// vars
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

							<h3>Scientific Advisory Board</h3>

							<div class="block-team-members">

							<?php while( have_rows('team_members') ): the_row(); 

								
								// vars
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

					</div>
				</div>
			</div><!-- 
			 --><div class="grid__item one-whole desk--one-quarter">
				<div class="block-page__imagebox">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>