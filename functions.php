<?php
    // Including Tailwind style css     
    add_action("init", function(){
       if (!is_admin()) {
         wp_enqueue_style( "tailwind-style", get_template_directory_uri() . "/src/tailwindoutput.css", [], "1", false);
       }
       add_theme_support('widgets');
       add_theme_support('menus');
       add_theme_support('post-thumbnails');

       add_image_size('post_preview',380,190,true);
    });
    // END Including Tailwind style css

?>