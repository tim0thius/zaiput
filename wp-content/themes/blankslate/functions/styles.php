<?php
    define('TMPLT',get_bloginfo('template_directory'));
    define('TMPLTD',get_template_directory());


  add_action('wp_enqueue_scripts', function () {
        wp_register_style('slick', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css');
        wp_register_style('slick-theme', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css');
        wp_register_style('app', mix('/css/app.css'));


        if (!is_admin()) {
        wp_enqueue_style('slick-theme');
        wp_enqueue_style('slick');
        }
  });