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
                <section class="block-header__branding">
                    <div class="block-header--site-title">
                        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">                
                            <img class="block-header__logo" src="/wp-content/themes/blankslate/assets/img/logo.png" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
                        </a>
                        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
                    </div>
                    <?php if(bloginfo( 'description' )) : ?>
                        <div class="block-header--site-description">
                            <?php bloginfo( 'description' ); ?>
                        </div>
                    <?php endif; ?>
                    <a href="/contact-us" class="component-button block-header__cta block-header__cta--desktop"><span>contact us</span></a>
                </section>
                
                <nav class="block-header--menu" role="navigation">
                            <!-- <div id="search">
            		<?php //get_search_form(); ?>
            		</div> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    <a href="/contact-us" class="component-button block-header__cta block-header__cta--mobile"><span>contact us</span></a>
                </nav>
                <a href="" class="block-header__menu-toggle action--toggle-menu">
                    <span class="block-header__menu-open"><img src="/wp-content/themes/blankslate/assets/img/menu.svg" alt=""></span>
                    <span class="block-header__menu-close">X</span>
                </a>
            </header>
        </div>
        <div id="container">