<?php
/*
Template Name: results
*/
?>

<?php
  get_header();

  $image_1 = get_field('image1_results');
  $image_2 = get_field('image2_results');
  $image_3 = get_field('image3_results');
  $image_4 = get_field('image4_results');
?>

<section>

  <div class="title_results">
    <h1><?php the_field('results'); ?></h1>
  </div>

<div class="wrap_results">

  <div class="subtitle_results">
    <h2><?php the_field('subtitle_results'); ?></h2>
  </div>

  <div class="bloc1_results">
      <div class="quote_results">
        <p><?php the_field('quote1_results'); ?></p>
      </div>
      <div class="photo_general_results">
        <div class="photo_results">
          <img class="img_results" src="<?php echo($image_1['sizes']['instagram-size']); ?>"/>
          <img class="img_results" src="<?php echo($image_2['sizes']['instagram-size']); ?>"/>
        </div>
        <div class="before_after_results">
          <p class="before_results"><?php the_field('before1_results'); ?></p>
          <p class="after_results"><?php the_field('after1_results'); ?></p>
        </div>
      </div>
  </div>

  <div class="bloc2_results">
      <div class="quote_results">
        <p><?php the_field('quote2_results'); ?></p>
      </div>
      <div class="photo_general_results">
        <div class="photo_results">
          <img class="img_results" src="<?php echo($image_3['sizes']['instagram-size']); ?>"/>
          <img class="img_results" src="<?php echo($image_4['sizes']['instagram-size']); ?>"/>
        </div>
        <div class="before_after_results">
          <p class="before_results" id="beforeresults"><?php the_field('before2_results'); ?></p>
          <p class="after_results" id="afterresults"><?php the_field('after2_results'); ?></p>
        </div>
      </div>
  </div>

</div>

</section>

<?php
  get_footer();
?>
