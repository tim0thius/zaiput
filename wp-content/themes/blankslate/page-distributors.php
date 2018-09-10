<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole">
				<div class="block-page__content">
					<div class="block-page__content-inner">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<section class="block-page__content">
						<?php the_content(); ?>
						</section>
						</article>

					</div>
				</div>
			</div>
		</div>
		<div class="grid">
			<div class="grid__item one-whole">
				<div class="block-page__content">
					<div class="block-page__content-inner">
						<?php if( have_rows('distributors') ): ?>		
							<div class="block-distributors">
								<h3>Distributors</h3>
								<div class="grid"><!-- 
								 --><?php while( have_rows('distributors') ): the_row(); ?><!-- 
									 --><div class="grid__item one-whole desk--one-third">
										@include( 'templates/cards/distributor')
									</div><!-- 
								 --><?php endwhile; ?><!-- 	
							 --></div>								
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