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
    wp_enqueue_style( 'presentation', get_template_directory_uri() . '/assets/css/presentation.css', array(), '1.1');
    wp_enqueue_style( 'seances', get_template_directory_uri() . '/assets/css/seances.css', array(), '1.1');
    wp_enqueue_style( 'practitioner', get_template_directory_uri() . '/assets/css/practitioner.css', array(), '1.1');
    wp_enqueue_style( 'resuslts', get_template_directory_uri() . '/assets/css/results.css', array(), '1.1');
    wp_enqueue_style( '404', get_template_directory_uri() . '/assets/css/404.css', array(), '1.1');
    wp_enqueue_style( 'need', get_template_directory_uri() . '/assets/css/need.css', array(), '1.1');
    wp_enqueue_style( 'header.home', get_template_directory_uri() . '/assets/css/header.home.css', array(), '1.1');
    wp_enqueue_style( 'flickity', get_template_directory_uri() . '/assets/css/flickity.css', array(), '1.1');
    wp_enqueue_script( 'lottie', get_template_directory_uri() . '/assets/js/lottie.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'flickity.pkgd.min', get_template_directory_uri() . '/assets/js/flickity.pkgd.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_style( 'home-page', get_template_directory_uri() . '/assets/css/home-page.css', array(), '1.1');
    wp_enqueue_style( 'job', get_template_directory_uri() . '/assets/css/job.css', array(), '1.1');
    wp_enqueue_style( 'prices', get_template_directory_uri() . '/assets/css/prices.css', array(), '1.1');
    wp_enqueue_style( 'home-page-responsive', get_template_directory_uri() . '/assets/css/home-page.responsive.css', array(), '1.1');
    wp_enqueue_style( 'footer-responsive', get_template_directory_uri() . '/assets/css/footer.responsive.css', array(), '1.1');
    wp_enqueue_style( 'presentation-responsive', get_template_directory_uri() . '/assets/css/presentation.responsive.css', array(), '1.1');
    wp_enqueue_style( 'seances-responsive', get_template_directory_uri() . '/assets/css/seances.responsive.css', array(), '1.1');
    wp_enqueue_style( 'portrait-responsive', get_template_directory_uri() . '/assets/css/portrait.responsive.css', array(), '1.1');
    wp_enqueue_style( 'need-responsive', get_template_directory_uri() . '/assets/css/need.responsive.css', array(), '1.1');
    wp_enqueue_style( 'job-responsive', get_template_directory_uri() . '/assets/css/job.responsive.css', array(), '1.1');
    wp_enqueue_style( 'practitioner-responsive', get_template_directory_uri() . '/assets/css/practitioner.responsive.css', array(), '1.1');
    wp_enqueue_style( 'header-responsive', get_template_directory_uri() . '/assets/css/header.responsive.css', array(), '1.1');
    wp_enqueue_style( 'result-responsive', get_template_directory_uri() . '/assets/css/results.responsive.css', array(), '1.1');



  }
  add_action( 'wp_enqueue_scripts', 'load_files' );

  register_nav_menus( array(
	   'main' => 'Menu Principal',
  ) );

  add_image_size( 'slider-size', 1280, 800, true );
  add_image_size( 'method-size', 380, 530, true );
  add_image_size( 'instagram-size', 280, 280, true );
?>
