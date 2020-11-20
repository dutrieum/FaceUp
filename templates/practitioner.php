<?php
  /*
    Template Name: practitioner
  */
?>

<?php
  get_header();
  $button_practitioner_prices = get_field('button_practitioner_prices');
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
        <a href="><?php echo($button_practitioner_prices); ?>">voir les tarifs</a>
      </div>
  </div>

<?php
  get_footer();
?>
