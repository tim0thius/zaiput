<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,900&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://use.typekit.net/dey5dnl.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>

	<?php if (get_field('use_alt_header')) : ?>
		<style>
			.block-header__box {
				background-color: <?php the_field('header_background_color') ?>;
				color: #fff;
			}
		</style>
	<?php endif; ?>
</head>

<?php
$header_class = get_field('use_alt_header') ? 'block-header--blue' : '';
?>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed block-header__box <?php echo $header_class ?>">
		<div class="grid__container">
			<header class="block-header" role="banner">
				<section class="block-header__branding">
					<div class="block-header--site-title">
						<?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
							echo '<h1>';
						} ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
							<?php if (get_field('use_alt_header')) : ?>
								<img class="block-header__logo alt-logo" src="<?php the_field('header_logo_alt', 'option') ?>" alt="<?php echo esc_html(get_bloginfo('name')); ?>">
							<?php else : ?>
								<img class="block-header__logo" src="<?php the_field('header_logo', 'option') ?>" alt="<?php echo esc_html(get_bloginfo('name')); ?>">
							<?php endif; ?>



						</a>
						<?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
							echo '</h1>';
						} ?>
					</div>
					<?php if (bloginfo('description')) : ?>
						<div class="block-header--site-description">
							<?php bloginfo('description'); ?>
						</div>
					<?php endif; ?>
					<a href="<?php the_field('cta_link', 'option') ?>" class="component-button block-header__cta block-header__cta--desktop"><span><?php the_field('cta_text', 'option') ?></span></a>
				</section>

				<nav class="block-header--menu" role="navigation">
					<!-- <div id="search">
            		<?php
					?>
            		</div> -->
					<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>

				</nav>
				<a href="" class="block-header__menu-toggle action--toggle-menu">
					<span class="block-header__menu-open"><img src="/wp-content/themes/blankslate/assets/img/menu.svg" alt=""></span>
					<span class="block-header__menu-close">X</span>
				</a>
			</header>
		</div>
	</div>
	<div class="wrapper">
		<div id="container">