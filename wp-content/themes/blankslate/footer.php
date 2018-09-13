<div class="clear"></div>
</div>
<footer class="block-footer" role="contentinfo" style="background-image:url(<?=the_field('footer_background_image', 'option')?>;)">
	<div class="grid__container">
		<div class="grid grid--narrow block-footer__columns">
			<div class="grid__item one-quarter portable--one-whole">
				<section class="block-footer__menu block-footer__column">
					<h3 class="block-footer__heading">Quick Links</h3>
			    	<nav class="block-footer__menu" role="navigation">
				        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				    </nav>
			    </section>
			</div><!-- 
			 --><div class="grid__item one-quarter portable--one-whole">
			    <section class="block-footer__contact block-footer__column">
			    	<h3 class="block-footer__heading"><?php the_field('form_title', 'option') ?></h3>
					<?php
						$form_shortcode = get_field('form_shortcode', 'option');
						echo do_shortcode( $form_shortcode );
					?>
			    </section>				
			</div><!-- 
			 --><div class="grid__item one-quarter portable--one-whole">
			    <section class="block-footer__social block-footer__column">
			    	<h3 class="block-footer__heading">Follow Us</h3>
			    	<div class="block-footer__logo-box">
			    		<a href="<?= the_field('twitter_url', 'option') ?>" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_TW.svg" alt=""></a>
						<a href="<?= the_field('facebook_url', 'option') ?>" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_FB.svg" alt=""></a>
						<a href="<?= the_field('linkedin_url', 'option') ?>" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_LI.svg" alt=""></a>
						<a href="<?= the_field('googleplus_url', 'option') ?>" class="block-footer__social-icon"><img src="/wp-content/themes/blankslate/assets/img/icon_GP.svg" alt=""></a>
			    	</div>
			    	<div class="block-footer__newsletter-link">
			    		<hr style="visibility: hidden;" >
			    		<p>See our <a target="_blank" href="https://mailchi.mp/e8f58d97c8e1/zaiput-goes-to-the-iss-zaiputs-new-multistage-extraction-platform-and-more-1360469">most recent newsletter</a>.</p></div>
			    	<div class="block-footer__newsletter-signup">
			    		<div id="mc_embed_signup">
							<form action="http://eepurl.com/zs4wf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate=""><br><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="component-button"><br>
							</form>
						</div>
					</div>
						
			    </section>				
			</div><!-- 
			 --><div class="grid__item one-quarter portable--one-whole">
			    <section class="block-footer__partners block-footer__column">
			    	<h3 class="block-footer__heading">Zaiput Partners</h3>
					<div class="block-footer__partners-logos">
						<?php if( have_rows('partners_logos', 'option') ): ?>
						    <?php while( have_rows('partners_logos', 'option') ): the_row(); ?>
						    	<a href="<?= the_sub_field('partner_url'); ?>">
							        <img src="<?php the_sub_field('partner_logo'); ?>" class="block-footer__partner_logo" />
							    </a>
						    <?php endwhile; ?>
						<?php endif; ?>
 					</div>	
			    </section>				
			</div>
		</div>
		<hr>
		<div class="grid grid--narrow block-footer__closing">
			<div class="grid__item one-half palm--one-whole">
				<section class="block-footer__content">
				    <div class="block-footer__copyright">
					<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
					 <br/><a href="<?php the_field('terms_of_use_link', 'option') ?>">Terms of Use</a> | <a href="<?php the_field('terms_of_sales_link', 'option') ?>">Terms of Sales</a> |<a href="<?php the_field('privacy_policy_link', 'option') ?>">Privacy Policy</a> 
					</div>
			    </section>	
			</div><!-- 
			 --><div class="grid__item one-half palm--one-whole">
			 	<section class="block-footer__branding">
		            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="block-footer__logo" src="<?php the_field('footer_logo', 'option') ?>" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"></a>
			    </section>
			    			
			</div>
		</div>


	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>