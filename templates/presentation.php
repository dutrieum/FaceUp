<?php
/*
Template Name: presentation
*/
?>

<?php
get_header();
?>

<presentation>
  <div class="wrap_presentation">
    <div class="photo_presentation">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/osteopathe_presentatipon.png" alt="ostéopathe">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/massage_presentatipon.png" alt="massage">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visage_presentatipon.png" alt="visage">
    </div>
<div>
  <h1><?php the_field('presentation'); ?></h1>
</div>

    <div class="title_presentation">
      <div>
      <p><?php the_field('title1'); ?></p>
    </div>

    <div>
    <p><?php the_field('title2'); ?></p>
  </div>

  <div>
  <p><?php the_field('title3'); ?></p>
</div>
    </div>

<div class="text_presentation">

  <div>
  <p><?php the_field('facialist'); ?></p>
  </div>

  <div>
  <p><?php the_field('faceup'); ?></p>
  </div>

  <div>
  <p><?php the_field('face'); ?></p>
  </div>

 </div>

</div>


</presentation>


<?php
  get_footer();
?>
