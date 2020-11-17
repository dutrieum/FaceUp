<?php
  /*
    Template Name: Portrait
  */
?>

<?php
  get_header();
  wp_head();
?>

<?php $portrait = get_field('portrait');
  echo $portrait;
?>
<h2><?php the_field('portrait'); ?></h2>

<?php
  get_footer();
  wp_footer();
?>
