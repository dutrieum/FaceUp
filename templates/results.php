<?php
/*
Template Name: results
*/
?>

<?php
  get_header();
?>

<section>

  <div class="title_results">
    <h1><?php the_field('results'); ?></h1>
  </div>

<div class="wrap_results">
  <div class"subtitle_results">
    <h2><?php the_field('subtitle_results'); ?></h2>
  </div>

  <div class="bloc1_results">
      <div class="citation_results">
        <p><?php the_field('quote1_results'); ?></p>
      </div>
      <div class="photo_results">
        <img class="img_results" src="<?php echo(get_field('image1_results')['url']); ?>"/>
        <img class="img_results" src="<?php echo(get_field('image2_results')['url']); ?>"/>
      </div>
  </div>

  <div class="bloc2_results">
      <div class="citation_results">
        <p><?php the_field('quote2_results'); ?></p>
      </div>
      <div class="photo_results">
        <img class="img_results" src="<?php echo(get_field('image3_results')['url']); ?>"/>
        <img class="img_results" src="<?php echo(get_field('image4_results')['url']); ?>"/>
      </div>
  </div>
</div>
</section>

<?php
  get_footer();
?>
