      <?php
  /*
    Template Name: Portrait
  */
?>

<?php
  get_header();
?>

<div class="bloc1_portrait">
  <div class="presentation_portrait">
    <div id="title_portrait">
      <p><?php the_field('portrait');?></p>
    </div>

    <div class="photo_portrait">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/claire.png" alt="Photo Claire">
    </div>

    <div class="text_portrait">
      <div id="text1_portrait">
        <p><?php the_field('claire'); ?></p>
      </div>

      <div id="text2_portrait">
        <p><?php the_field('subtitle'); ?></p>
      </div>

      <div id="text3_portrait">
        <p><?php the_field('description1'); ?></p>
      </div>

    </div>
  </div>
</div>


<?php
  get_footer();
?>
