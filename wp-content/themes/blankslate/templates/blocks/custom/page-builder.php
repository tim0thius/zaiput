<?php
if( have_rows('page_builder') ):

     // loop through the rows of data
    while ( have_rows('page_builder') ) : the_row();

        if( get_row_layout() == 'hero' ):

            get_template_part('templates/blocks/custom/hero');

        elseif( get_row_layout() == 'hero_with_video' ):

            get_template_part('templates/blocks/custom/hero-with-video');
        
        elseif( get_row_layout() == 'image_and_text' ):

            get_template_part('templates/blocks/custom/content');

        endif;

    endwhile;

else :

    // no layouts found

endif;
?>





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section id="" class="block-custom-content block-custom-content--image-right" role="main" style="display:none;" >
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
					<?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } ?>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php endwhile;
endif; ?>