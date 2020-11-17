<!DOCTYPE html>
<html>
<?php
  wp_head();
  global $template;
  $template_name = basename($template, '.php');
?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container" data-plat-namespace="<?php echo($template_name); ?>">
      <header>
          <a href="<?php echo home_url( '/' ); ?>"><img class="logotype" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_yellow.svg" alt="Website logo"></img></a>
          <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
      </header>
