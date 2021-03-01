<?php
  get_header();

  $images = get_field('slider');
  $method_first = get_field('first_picture_front_page');
  $method_second = get_field('second_picture_front_page');
  $button_discover = get_field('slider_button');
  $button_learn_more = get_field('learn_more_button');
  $button_testimony = get_field('button_testimony_front');
  $first_link = get_field('first_picto_link');
  $second_link = get_field('second_picto_link');
  $third_link = get_field('third_picto_link');
  $instagram_first_front = get_field('first_post_instagram_front_page');
  $instagram_second_front = get_field('second_post_instagram_front_page');
  $instagram_third_front = get_field('third_post_instagram_front_page');
  $instagram_fourth_front = get_field('fourth_post_instagram_front_page');
?>

<main>
  <div class="loader" id="svgContainer"></div>
  <div class="slider">
    <div class="main-carousel">
      <div class="static_text_slider"><?php the_field('slider_text'); ?></div>
      <div class="static_button_slider"><a href="<?php echo($button_discover); ?>">DÉCOUVRIR</a></div>
      <?php foreach( $images as $image ): ?>
        <div class="carousel-cell"><img src="<?php echo($image['sizes']['slider-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/></div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="wrap_front_page">
    <div class="method_front_page">
      <div class="pictures_front_page">
        <img src="<?php echo($method_first['sizes']['method-size']); ?>"/>
        <img src="<?php echo($method_second['sizes']['method-size']); ?>"/>
      </div>
      <div class="introduction_front_page">
        <h2><?php the_field('introduction_title'); ?></h2>
        <p><?php the_field('introduction_text'); ?></p>
        <a href="<?php echo($button_learn_more); ?>">EN SAVOIR PLUS</a>
      </div>
    </div>
    <div class="quotation_front_page">
      <div class="border_quotation_front_page">
        <h2><?php the_field('quotation_front_page'); ?></h2>
        <p><?php the_field('author_front_page'); ?></p>
      </div>
      <a href="<?php echo($button_testimony); ?>">VOIR TOUS LES TÉMOIGNAGES</a>
    </div>
    <div class="pictograms_front_page">
      <h2><?php the_field('picto_title_front'); ?></h2>
      <div class="picto_front_page">
        <div class="first_picto_front">
          <a href="<?php echo($first_link); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/planning.svg" alt="Planning logo"></a>
          <a href="<?php echo($first_link); ?>"><p><?php the_field('first_picto_text'); ?></p></a>
        </div>
        <div class="second_picto_front">
          <a href="<?php echo($second_link); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tag.svg" alt="Tag logo"></a>
          <a href="<?php echo($second_link); ?>"><p><?php the_field('second_picto_text'); ?></p></a>
        </div>
        <div class="third_picto_front">
          <a href="<?php echo($third_link); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="Map logo"></a>
          <a href="<?php echo($third_link); ?>"><p><?php the_field('third_picto_text'); ?></p></a>
        </div>
      </div>
    </div>
    <div class="social_wall_front_page">
      <h2><?php the_field('instagram_title_front'); ?></h2>
      <p><?php the_field('instagram_text_front'); ?></p>
      <div class="social_wall_posts_front_page">
        <a href="https://www.instagram.com/faciology_/"><img src="<?php echo($instagram_first_front['sizes']['instagram-size']); ?>"/></a>
        <a href="https://www.instagram.com/faciology_/"><img src="<?php echo($instagram_second_front['sizes']['instagram-size']); ?>"/></a>
        <a href="https://www.instagram.com/faciology_/"><img src="<?php echo($instagram_third_front['sizes']['instagram-size']); ?>"/></a>
        <a href="https://www.instagram.com/faciology_/"><img src="<?php echo($instagram_fourth_front['sizes']['instagram-size']); ?>"/></a>
      </div>
    </div>
  </div>
</main>

<?php
  get_footer();
?>
