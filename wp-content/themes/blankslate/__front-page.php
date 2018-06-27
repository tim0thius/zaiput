<?php get_header(); ?>
<section id="content" role="main">
@wpposts
@include( 'templates/blocks/masthead' )
@wpempty
    <p>404</p>
@wpend
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_footer(); ?>