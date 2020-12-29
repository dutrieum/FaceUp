<?php
/*
Template Name: Prices
*/
?>

<?php
  get_header();
?>

<main>
  <div class="wrap_prices_page">
    <h1><?php the_field('prices_title'); ?></h1>
    <div class="paragraph_prices">
      <p><?php the_field('prices_text');?></p>
    </div>
  </div>
</main>

<?php
  get_footer();
?>
