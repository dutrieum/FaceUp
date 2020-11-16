<?php
  /*
    Template Name: Portrait
  */
?>

<?php $title = get_field('title');
  echo $title;?>
<h2><?php the_field('title'); ?></h2>

<?php
get_footer();
?>
