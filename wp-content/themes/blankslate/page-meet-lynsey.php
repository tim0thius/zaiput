<?php get_header(); ?>

@include( 'templates/blocks/about', ['about_id' => 'frontpage'] )

@include( 'templates/blocks/cta', ['cta_id' => 'session'] )

<section id="content" role="main" style="display:none;" >
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
			<h1 class="entry-title">{{the_title()}} </h1>
		</header>
		<section class="entry-content">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
		</section>
	</article>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>