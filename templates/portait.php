      <?php
  /*
    Template Name: Portrait
  */
?>

<?php
  get_header();
?>

<div class="bloc1">
<div class="presentation">
  <div id="titre">
    <p><?php the_field('portrait');?></p>
  </div>

  <div id="photo">
    <div>
      <img id="claire" src="<?php echo get_template_directory_uri(); ?>/assets/img/claire.png" alt="Photo Claire">
  </div>
    </div>

<div class="texte">
  <div id="texte1">
    <p><?php the_field('claire'); ?></p>
  </div>

  <div id="texte2">
    <p><?php the_field('subtitle'); ?></p>
  </div>

  <div id="texte3">
    <p><?php the_field('description1'); ?></p>
  </div>
</div>
  </div>
  </div>


<?php
  get_footer();
?>
