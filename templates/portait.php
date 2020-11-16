<?php
  /*
    Template Name: Portrait
  */
?>

<?php
  get_header();
  wp_head();
?>

<?php $title = get_field('title');
  echo $title;
?>
<h2><?php the_field('title'); ?></h2>

<?php
  get_footer();
  wp_footer();
?>
