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


$claire = get_field('claire');
  echo $claire;


$subtitle = get_field('subtitle');
  echo $subtitle;


$description1 = get_field('description1');
  echo $description1;


$description2 = get_field('description2');
  echo $description2;


$description3 = get_field('description3');
  echo $description3;
?>

<?php
  get_footer();
  wp_footer();
?>
