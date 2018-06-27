<?php
    define('TMPLT',get_bloginfo('template_directory'));
    define('TMPLTD',get_template_directory());
    
    function mix($path)
    {
        $manifest = TMPLTD.'/assets/mix-manifest.json';
        $manifest = json_decode(file_get_contents($manifest), true);

        return TMPLT.'/assets'.$manifest[$path];
    }

    if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page();
		
	}

    add_action('pre_get_posts', 'ltp_pre_get_posts', 9999);

     function ltp_pre_get_posts($query)
     {

       if (!is_admin() && $query->is_main_query() && $query->is_category) {
         $query->set('post_type', ['gallery']);
       }

     }
