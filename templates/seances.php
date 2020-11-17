<?php
  /*
    Template Name: Session
  */
?>

<?php
  get_header();
?>

    <div id="title">
      <h1><?php the_field('title'); ?></h1>
    </div>
    <div class="wrap_seances">
      <div>
        <img id="etapes" src="<?php echo get_template_directory_uri(); ?>/assets/img/etapes.JPG" alt="Différentes étapes">
      </div>
      <div id="etape">
        <h2><?php the_field('little_title1'); ?></h2>
        <p><?php the_field('text1'); ?></p>
      </div>
    </div>

<?php
  get_footer();
?>
