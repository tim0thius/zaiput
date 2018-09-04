<?php get_header(); ?>

<?php
	$distributors_args = array(
		'page_id' => 324 // 248 for local
	);
	$distributors_page = new WP_Query($distributors_args);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole">
				<header class="header">
					<h1 class="block-page__headline"><?php the_title(); ?></h1>
				</header>
			</div>
			<div class="grid__item one-whole desk--two-thirds">
				<div class="component-callout">
					<div class="grid">
						<div class="grid__item one-whole desk--one-half">
							<div class="component-callout__section">
								<h4>You may contact us by phone, email, or by using the form on this page.</h4>
								<ul>
									<li><span>Phone: </span><span><strong><?php the_field('phone', 'option') ?></strong></span></li>
									<li><span>Technical Questions: </span><span><strong><a href="mailto:<?php the_field('tech_email', 'option') ?>"><?php the_field('tech_email', 'option') ?></a></strong></span></li>
									<li><span>Product Inquiries: </span><span><strong><a href="mailto:<?php the_field('product_email', 'option') ?>"><?php the_field('product_email', 'option') ?></a></strong></span></li>
									<li><span>Orders: </span><span><strong><a href="mailto:<?php the_field('orders_email', 'option') ?>"><?php the_field('orders_email', 'option') ?></a></strong></span></li>
									<li><span>Other/General: </span><span><strong><a href="mailto:<?php the_field('general_email', 'option') ?>"><?php the_field('general_email', 'option') ?></a></strong></span></li>
								</ul>
							</div>
						</div><!-- 
					 --><div class="grid__item one-whole desk--one-half">
							<div class="component-callout__section">
								<h4><?php the_field('location', 'option') ?></h4>
								<iframe src="<?php the_field('google_map_url', 'option') ?>" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
							</div>
						</div>
					</div>
				</div>
					
			</div><!-- 
			 --><div class="grid__item one-whole desk--one-third">
				<div class="block-page__content">
					<div class="block-page__content-inner">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<section class="block-page__content">
						<?php
							$form_shortcode = get_field('form_shortcode');
							echo do_shortcode( $form_shortcode );
						?>
					
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

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<section class="block-page__content">
						<?php the_content(); ?>
						</section>
						</article>

					</div>
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
						   if($distributors_page->have_posts()) : 
						   	$count = 0;
						      while($distributors_page->have_posts()) : 
						         $distributors_page->the_post();			    
						?>
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