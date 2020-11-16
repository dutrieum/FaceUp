<?php
  if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
            'page_title' => 'Footer',
            'menu_title' => 'Footer',
            'menu_slug' => 'footer',
            'capability' => 'read',
            'redirect' => false,
            'icon_url' => 'dashicons-buddicons-groups'
        ));
      }
  function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'footer', get_template_directory_uri() . 'assets/css/footer.css', array(), '1.1', 'all');

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>
