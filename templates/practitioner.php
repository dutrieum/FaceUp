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
  <!--  <div class="map">
    <iframe src="https://www.google.com/maps/d/embed?mid=1fikSmzQGUdQzE2qp2MZXXgEXHxlH9y-0" width="640" height="480"></iframe>
  </div> -->
  <div class="wrap_practitioner">
    <div class="first_column_practitioner">
      <h2><?php the_field('practitioner_first_subtitle'); ?></h2>
      <p><?php the_field('practitioner_first_text'); ?></p>
      <a href="http://faciology.fr"><?php the_field('link_faciology_national'); ?></a>
    </div>
    <div class="first_column_practitioner">
      <h2><?php the_field('practitioner_second_subtitle'); ?></h2>
      <p><?php the_field('practitioner_second_text'); ?></p>
      <a href="https://www.doctolib.fr/osteopathe/saint-alban-leysse/claire-berthon"><?php the_field('link_doctolib'); ?></a>
    </div>
  </div>
  <div class="title_practitioner_prices">
    <p><?php the_field('title_practitioner_prices'); ?></p>
      <div class="button_practitioner_prices">
        <a href="<?php echo($button_practitioner_prices); ?>">voir les tarifs</a>
      </div>
  </div>

<?php
  get_footer();
?>
