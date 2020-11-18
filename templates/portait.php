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
      <img src="<?php echo(get_field('photo_portrait')['url']); ?>"/>
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
<div class="bloc2_portrait">
  <div class="presentation2_portrait">
      <div class="text2_portrait">
        <div id="text4_portrait">
          <p><?php the_field('description2'); ?></p>
        </div>
      </div>
      <div class="photo2_portrait">
        <img src="<?php echo(get_field('photo2_portrait')['url']); ?>"/>
      </div>
    </div>
</div>
<div class="citation_portrait">
  <p><?php the_field('quote'); ?></p>
    <div class="button_portrait">
        <a href="<?php echo(get_permalink($button->ID)); ?>">voir tous les témoignages</a>
    </div>
</div>
<div class="formation_portrait">
  <p><?php the_field('formation'); ?></p>
    <div class="button_portrait">
      <a href="<?php echo(get_permalink($button->ID)); ?>">se former</a>
    </div>
</div>
<div class="instagram_portrait">
  <h2><?php the_field('follow'); ?></h2>
  <p><?php the_field('instagram'); ?></p>
</div>



<?php
  get_footer();
?>
