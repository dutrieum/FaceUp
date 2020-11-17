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

  function load_files() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.1');
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.1');
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1');
    wp_enqueue_style( 'portrait', get_template_directory_uri() . '/assets/css/portrait.css', array(), '1.1');
    wp_enqueue_style( 'seances', get_template_directory_uri() . '/assets/css/seances.css', array(), '1.1');
    wp_enqueue_style( 'header.home', get_template_directory_uri() . '/assets/css/header.home.css', array(), '1.1');
  }
  add_action( 'wp_enqueue_scripts', 'load_files' );

  register_nav_menus( array(
	   'main' => 'Menu Principal',
  ) );
?>
