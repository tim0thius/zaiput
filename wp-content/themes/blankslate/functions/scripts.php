<?php
	// $template_url = get_template_directory_uri();

	// wp_enqueue_script( 'app', $template_url . '/assets/js/app.js', array(), null, true );


    add_action('wp_enqueue_scripts', function () {

        wp_register_script('fitvids', '//cdnjs.cloudflare.com/ajax/libs/fitvids/1.2.0/jquery.fitvids.js', false, '1.2.0', true);
        wp_register_script('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', false, '1.7.1', true);
        wp_register_script('waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js', false, '4.0.1', true);

        wp_register_script('app', mix('/js/app.js'), ['jquery','slick','fitvids'], false, true);

        if (!is_admin()) {
          wp_enqueue_script('app');
        }
    });