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

  if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
            'page_title' => 'Header',
            'menu_title' => 'Header',
            'menu_slug' => 'header',
            'capability' => 'read',
            'redirect' => false,
            'icon_url' => 'dashicons-buddicons-groups'
        ));
  }

  function load_files() {
    wp_register_style( 'footer', get_template_directory_uri() . 'assets/css/footer.css', array(), '1.1', 'all');
    wp_enqueue_style( 'footer');
  }
  add_action( 'wp_enqueue_style', 'load_files' );
?>
