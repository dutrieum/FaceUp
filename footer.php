<footer>
  <link type="text/css" rel="stylesheet" href="assets/css/footer.css"/>


<h2><?php the_field('address', 'option'); ?></h2>
<h2><?php the_field('phone', 'option'); ?></h2>
<h2><?php the_field('email', 'option'); ?></h2>
<h2><?php $mentions = get_field('mentions', 'option');?></h2>
<a href="<?php echo(get_permalink($mentions->ID)); ?>">Mentions Légales</a>

<h2><?php $button = get_field('button', 'option');?></h2>
<a href="<?php echo(get_permalink($button->ID)); ?>">Prendre rendez-vous</a>

</footer>
