<?php
  get_header();

  $images = get_field('slider');
?>

<main>
  <div class="slider">
    <div class="main-carousel">
      <div class="static_text_slider"><?php the_field('slider_text'); ?></div>
      <div class="static_button_slider"><a href="<?php echo(get_permalink($button->ID)); ?>">DÉCOUVRIR</a></div>
      <?php foreach( $images as $image ): ?>
        <div class="carousel-cell"><img src="<?php echo($image['sizes']['slider-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/></div>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php
  get_footer();
?>
