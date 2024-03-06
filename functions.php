<?php
    // Including Tailwind style css     
    add_action("init", function(){
       if (!is_admin()) {
        wp_enqueue_style( "tailwind-style", get_template_directory_uri() . "/src/tailwindoutput.css", [], time(), false);
       }
       wp_enqueue_script('submenujs', get_template_directory_uri() . "/assets/js/submenu.js", [], time(), true);
       add_theme_support('widgets');
       add_theme_support('menus');
       add_theme_support('post-thumbnails');

      //  add_image_size('post_preview',600,300,true);

      //Register Menus
      register_nav_menus(
        array(
          'main-menu' => 'Header Menu',
          'footer-menu' => 'Footer Menu',
        )
      );

    });
    // END Including Tailwind style css

  /**
   * Walker Class
   */
  class header_menu_walker
  {

  }