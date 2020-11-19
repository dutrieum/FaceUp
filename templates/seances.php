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
          <p><?php $button_seances = get_field('button_seances');?></p>
          <a href="<?php the_field('button_seances'); ?>">Voir les résultats</a>
        </div>
				<div class="child photo seances">
          <img src="<?php echo(get_field('picture2')['url']); ?>"/>
        </div>
      </div>
      <div class="citation seances">
        <div class="ligne seances">
          <h2><?php the_field('citation'); ?></h2>
          <p><?php the_field('author_citation'); ?></p>
        </div>
      </div>
      <div class="parent seances">
        <div class="child text seances no_margin">
          <h2><?php the_field('little_title3'); ?></h2>
          <p><?php the_field('text3'); ?></p>
        </div>
        <div class="child text seances no_margin">
          <h2><?php the_field('little_title4'); ?></h2>
          <p><?php the_field('text4'); ?></p>
        </div>
      </div>
      <div class="parent seances">
        <div class="child photo seances">
          <img src="<?php echo(get_field('picture3')['url']); ?>"/>
        </div>
        <div class="child text seances">
          <h2><?php the_field('little_title5'); ?></h2>
          <p><?php the_field('text5'); ?></p>
        </div>
      </div>
      <div class="parent seances">
        <div class="child text seances">
          <h2 class="text"><?php the_field('little_text6'); ?></h2>
          <p><?php the_field('text6'); ?></p>
        </div>
        <div class="child photo seances">
          <img src="<?php echo(get_field('picture4')['url']); ?>"/>
        </div>
      </div>
    </div>

<?php
  get_footer();
?>
