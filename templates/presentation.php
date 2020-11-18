<?php
/*
Template Name: presentation
*/
?>

<?php
get_header();
?>

<section>

  <div class="title_presentation">
    <h1><?php the_field('presentation'); ?></h1>
  </div>

<div class="wrap_presentation">
    <div class="parent_presentation">
      <div class="child_photop"><img class="img_presentation" src="<?php echo(get_field('doctor_presentation')['url']); ?>"/></div>
      <div class='child_textp'><p class="mtitle_presentation"><?php the_field('title1'); ?></p> <p class="subtitle_presentation"><?php the_field('subtitle1'); ?> </p> <p><?php the_field('facialist'); ?></p></div>

    </div>

    <div class="parent_presentation">
      <div class="child_photop2"><img class="img_presentation" src="<?php echo(get_field('massage_presentation')['url']); ?>"/></div>
      <div class="child_textp2"><p class="mtitle_presentation"><?php the_field('title2'); ?></p><p class="subtitle_presentation"><?php the_field('subtitle2'); ?> </p><p><?php the_field('faceup'); ?></p></div>

    </div>

    <div class="parent_presentation">
      <div class="child_photop"><img class="img_presentation" src="<?php echo(get_field('face_presentation')['url']); ?>"/></div>
      <div class='child_textp'><p class="mtitle_presentation"><?php the_field('title3'); ?></p> <p class="subtitle_presentation"><?php the_field('subtitle3'); ?> </p> <p><?php the_field('face'); ?></p></div>

    </div>
</div>

</section>


<?php
  get_footer();
?>
