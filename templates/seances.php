<?php
  /*
    Template Name: Session
  */
?>

<?php
  get_header();
?>

    <div id="title">
      <h1><?php the_field('title'); ?></h1>
    </div>

    <div class="wrap">
			<div class="parent">
				<div class="child photo">
        <img src="<?php echo(get_field('picture1')['url']); ?>"/>
        </div>
				<div class="child text">
          <h2><?php the_field('little_title1'); ?></h2>
          <p><?php the_field('text1'); ?></p>
        </div>
      </div>
      <div class="parent">
        <div class="child text">
          <h2><?php the_field('little_title2'); ?></h2>
          <p><?php the_field('text2'); ?></p>
        </div>
				<div class="child photo">
        <img src="<?php echo(get_field('picture2')['url']); ?>"/>
        </div>
        <div class="child bouton">
        <p><?php $button = get_field('button');?></p>
        <a href="<?php echo(get_permalink($button->ID)); ?>">VOIR LES RÉSULTATS</a>
        </div>
      </div>

    </div>


<?php
  get_footer();
?>
