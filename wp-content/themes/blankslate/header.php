<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://use.typekit.net/dey5dnl.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <div class="grid__container">
            <header class="block-header" role="banner">
                <section class="block-header--branding">
                    <div class="block-header--site-title">
                        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">                
                            <img class="block-header__logo" src="/wp-content/themes/blankslate/assets/img/logo.png" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
                        </a>
                        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
                    </div>
                    <div class="block-header--site-description">
                        <?php bloginfo( 'description' ); ?>
                    </div>
                </section>
                <nav class="block-header--menu" role="navigation">
                    <!-- <div id="search">
    		<?php //get_search_form(); ?>
    		</div> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </nav>
            </header>
        </div>
        <div id="container">