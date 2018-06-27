<div class="clear"></div>
</div>
<footer class="block-footer" role="contentinfo" style="background-image:url(<?=the_field('footer_background_image', 'option')?>;)">
	<div class="grid__container">
		<div class="grid grid--narrow">
			<div class="grid__item two-fifths">
				<section class="block-footer__branding">
		            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="block-footer__logo" src="/wp-content/themes/blankslate/assets/img/logo_white.png" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"></a>
			    </section>
			</div><!-- 
			 --><div class="grid__item three-fifths">
			    <section class="block-footer__content">
			    	<nav class="block-footer__menu" role="navigation">
				        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				    </nav>
				    <div class="block-footer__copyright">
					<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
					</div>
			    </section>				
			</div>
		</div>


	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>