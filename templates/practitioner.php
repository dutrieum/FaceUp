<?php
  /*
    Template Name: practitioner
  */
?>

<?php
  get_header();
?>

  <div class="title_practitioner">
    <h1><?php the_field('title_practitioner'); ?></h1>
  </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/d/embed?mid=1fikSmzQGUdQzE2qp2MZXXgEXHxlH9y-0" width="640" height="480"></iframe>
  </div>



  <div class="title_practitioner_prices">
    <p><?php the_field('title_practitioner_prices'); ?></p>
      <div class="button_practitioner_prices">
        <a href="<?php echo(get_permalink($button_practitioner_prices->ID)); ?>">voir les tarifs</a>
      </div>
  </div>





<?php
  get_footer();
?>
