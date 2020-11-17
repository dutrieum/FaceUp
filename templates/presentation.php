<?php
/*
Template Name: presentation
*/
?>

<?php
get_header();
?>

<presentation>
  <div class="wrap">
    <div class="photo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/osteopathe.png" alt="ostéopathe">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/massage.png" alt="massage">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visage.png" alt="visage">
    </div>
<div>
  <h1><?php the_field('presentation'); ?></h1>
</div>

    <div class="title">
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

<div class="text">

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
