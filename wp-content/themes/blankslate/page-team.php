<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole">
				<div class="block-page__content">
					<div class="block-page__content-inner">
						<?php if( have_rows('team_members') ): ?>		
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
							<div class="block-team-members" id="block-scientific-advisory-members">
								<h3>Advisory Board</h3>

								<?php while( have_rows('team_members') ): the_row(); 
									$category = get_sub_field('category');
									$title = get_sub_field('title');
									$image = get_sub_field('avatar');
									$content = get_sub_field('bio');
									?>
									<?php if($category == 'sci-advisory'): ?>
										@include( 'templates/cards/team-item')
									<?php endif; ?>	
								<?php endwhile; ?>														

								<?php while( have_rows('team_members') ): the_row(); 
									$category = get_sub_field('category');
									$title = get_sub_field('title');
									$image = get_sub_field('avatar');
									$content = get_sub_field('bio');
									?>
									<?php if($category == 'bus-advisory'): ?>
										@include( 'templates/cards/team-item')
									<?php endif; ?>	
								<?php endwhile; ?>									
							</div>
						<?php endif; ?>
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