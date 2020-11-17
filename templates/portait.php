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


<portrait>
  <div class="presentation">
  <div id="photo">
    <div>
      <img id="claire" src="<?php echo get_template_directory_uri(); ?>/assets/img/claire.png" alt="Photo Claire">
  <div id="texte">
    <p><?php the_field('claire'); ?></p>
    <p><?php the_field('subtitle'); ?></p>
    <p><?php the_field('description1'); ?></p>
  </div>
  </div>
  </div>
</portrait>

<?php
  get_footer();
  wp_footer();
?>
