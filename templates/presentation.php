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
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/claire.png" alt="">
    </div>
    <div class="text">
      <?php the_field('title1') ?>
    </div>


  </div>


</presentation>


<?php
  get_footer();
?>
