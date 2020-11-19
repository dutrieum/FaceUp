      <?php
  /*
    Template Name: Portrait
  */
?>

<?php
  get_header();
  $instagram_first_portrait = get_field('instagram1_portrait');
  $instagram_second_portrait = get_field('instagram2_portrait');
  $instagram_third_portrait = get_field('instagram3_portrait');
  $instagram_fourth_portrait = get_field('instagram4_portrait');
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
<div class="bandeau_portrait">
  <a href="https://www.instagram.com/faceup_facialist/?hl=fr">
    <img src="<?php echo($instagram_first_portrait['sizes']['instagram-size']); ?>"/>
  </a>
  <a href="https://www.instagram.com/faceup_facialist/?hl=fr">
    <img src="<?php echo($instagram_second_portrait['sizes']['instagram-size']); ?>"/>
  </a>
  <a href="https://www.instagram.com/faceup_facialist/?hl=fr">
    <img src="<?php echo($instagram_third_portrait['sizes']['instagram-size']); ?>"/>
  </a>
  <a href="https://www.instagram.com/faceup_facialist/?hl=fr">
    <img src="<?php echo($instagram_fourth_portrait['sizes']['instagram-size']); ?>"/>
  </a>
</div>

<?php
  get_footer();
?>
