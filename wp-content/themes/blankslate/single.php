<?php get_header(); ?>

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

<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>