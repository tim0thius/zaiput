<div class="clear"></div>
</div>
<footer class="block-footer" role="contentinfo" style="background-image:url(<?=the_field('footer_background_image', 'option')?>;)">
	<div class="grid__container">
		<div class="grid grid--narrow block-footer__columns">
			<div class="grid__item one-quarter portable--one-whole">
				<section class="block-footer__menu block-footer__column">
			    	<nav class="block-footer__menu" role="navigation">
				        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				    </nav>
			    </section>
			</div><!-- 
			 --><div class="grid__item one-quarter portable--one-whole">
			    <section class="block-footer__contact block-footer__column">
			    	<h3 class="block-footer__heading">Contact Us</h3>
					<?php
						echo do_shortcode( '[ninja_form id=5]' );
					?>
			    </section>				
			</div><!-- 
			 --><div class="grid__item one-quarter portable--one-whole">
			    <section class="block-footer__social block-footer__column">
			    	<h3 class="block-footer__heading">Follow Us</h3>
			    	<div class="block-footer__logo-box">
			    		<a href="" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_TW.svg" alt=""></a>
						<a href="" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_FB.svg" alt=""></a>
						<a href="" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_LI.svg" alt=""></a>
						<a href="" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_LI.svg" alt=""></a>
			    	</div>
						
			    </section>				
			</div><!-- 
			 --><div class="grid__item one-quarter portable--one-whole">
			    <section class="block-footer__partners block-footer__column">
			    	<h3 class="block-footer__heading">Zaiput Partners</h3>
					<div class="block-footer__partners-logos">
						<?php if( have_rows('partners_logos', 'option') ): ?>
						    <?php while( have_rows('partners_logos', 'option') ): the_row(); ?>
						        <img src="<?php the_sub_field('partner_logo'); ?>" class="block-footer__partner_logo" />
						    <?php endwhile; ?>
						<?php endif; ?>
 					</div>	
			    </section>				
			</div>
		</div>
		<hr>
		<div class="grid grid--narrow">
			<div class="grid__item one-half">
				<section class="block-footer__content">
				    <div class="block-footer__copyright">
					<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
					</div>
			    </section>	
			</div><!-- 
			 --><div class="grid__item one-half">
			 	<section class="block-footer__branding">
		            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="block-footer__logo" src="/wp-content/themes/blankslate/assets/img/logo_white.png" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"></a>
			    </section>
			    			
			</div>
		</div>


	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>