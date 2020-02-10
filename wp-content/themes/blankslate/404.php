<?php get_header(); ?>


@include( 'templates/components/subpage-header2' )

<section id="" class="block-page block-page--products" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole">
				<header class="header">
					<h1 class="block-page__headline"><?php _e( '404 | Page Not Found', 'blankslate' ); ?></h1>
				</header>
				<section class="block-page__content">
					<?php _e( 'Nothing found for the requested page. Please select a product below or choose a page from the menu.', 'blankslate' ); ?>
					<div class="block-page__links"><?php wp_link_pages(); ?></div>
				</section>
			</div>
		</div>

		@include( 'templates/blocks/products--frontpage', ['product_id' => 'products'] )
		
	</div>
</section>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>



