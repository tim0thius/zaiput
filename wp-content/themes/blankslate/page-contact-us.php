<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

@include( 'templates/components/subpage-header2' )

<section id="" class="block-page" role="main" >
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole desk--two-thirds">
				<div class="component-callout">
					<div class="grid">
						<div class="grid__item one-whole desk--one-half">
							<div class="component-callout__section">
								<h4>You may contact us by phone, email, or by using the form on this page.</h4>
								<ul>
									<li><span>Phone: </span><span><strong>+1-617-714-9806</strong></span></li>
									<li><span>Technical Questions: </span><span><strong>support@zaiput.com</strong></span></li>
									<li><span>Product Inquiries: </span><span><strong>sales@zaiput.com</strong></span></li>
									<li><span>Orders: </span><span><strong>orders@zaiput.com</strong></span></li>
									<li><span>Other/General: </span><span><strong>info@zaiput.com</strong></span></li>
								</ul>
							</div>
						</div><!-- 
					 --><div class="grid__item one-whole desk--one-half">
							<div class="component-callout__section">
								<h4>Laboratories and Offices are located at <span>300 2nd Avenue Waltham, MA 02451</span></h4>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.8925240776575!2d-71.26691898454287!3d42.38743597918505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e39cb54b52a39f%3A0xa550ee880e90392f!2s300+2nd+Ave%2C+Waltham%2C+MA+02451!5e0!3m2!1sen!2sus!4v1534710401649" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
							</div>
						</div>
					</div>
				</div>
					
			</div><!-- 
			 --><div class="grid__item one-whole desk--one-third">
				<div class="block-page__content">
					<div class="block-page__content-inner">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="header">
						<h1 class="block-page__headline"><?php the_title(); ?></h1>
						</header>
						<section class="block-page__content">
						<?php
							$formid = get_field('form_id');
							echo do_shortcode( $formid );
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
<section id="" class="block-distributors">
	<div class="grid__container">
		<div class="grid">
			<div class="grid__item one-whole desk--one-third">
				@include( 'templates/cards/distributor')
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>