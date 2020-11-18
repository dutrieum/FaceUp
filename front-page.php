<?php
  get_header();

  $images = get_field('slider');
?>

<main>
  <div class="main-carousel">
    <?php foreach( $images as $image ): ?>
      <div class="carousel-cell"><img src="<?php echo wp_get_attachment_image( $image['url'], 'slider-size' ); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/></div>
    <?php endforeach; ?>
  </div>
</main>

<?php
  get_footer();
?>
