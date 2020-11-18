<?php
  /*
    Template Name: Session
  */
?>

<?php
  get_header();
?>

    <div id="title_seances">
      <h1><?php the_field('title'); ?></h1>
    </div>

    <div class="wrap seances">
			<div class="parent seances">
				<div class="child photo seances">
        <img src="<?php echo(get_field('picture1')['url']); ?>"/>
        </div>
				<div class="child text seances">
          <h2><?php the_field('little_title1'); ?></h2>
          <p><?php the_field('text1'); ?></p>
        </div>
      </div>
      <div class="parent seances">
        <div class="child text seances">
          <h2><?php the_field('little_title2'); ?></h2>
          <p><?php the_field('text2'); ?></p>
          <p><?php $button = get_field('button');?></p>
          <a href="<?php echo(get_permalink($button->ID)); ?>">VOIR LES RÉSULTATS</a>
        </div>
				<div class="child photo seances">
        <img src="<?php echo(get_field('picture2')['url']); ?>"/>
        </div>
      </div>

    </div>


<?php
  get_footer();
?>
