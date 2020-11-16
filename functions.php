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
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.1');
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1');
  }
  add_action( 'wp_enqueue_style', 'load_files' );
?>
