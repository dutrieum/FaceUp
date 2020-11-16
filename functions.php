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
?>
