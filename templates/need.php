<?php
  /*
    Template Name: need
  */
?>

<?php
  get_header();
?>

  <div class="title_need">
    <h1><?php the_field('title_need'); ?></h1>
  </div>

  <div class="wrap need">
    <div class="parent need">
      <div class="child photo need">
        <img src="<?php echo(get_field('picture_need_1')['url']); ?>"/>
      </div>
      <div class="child text need">
        <h2><?php the_field('subtitle_need1'); ?></h2>
        <p><?php the_field('text_need1'); ?></p>
      </div>
    </div>
    <div class="parent need line">
      <div class="child text need">
        <h2><?php the_field('subtitle_need2'); ?></h2>
        <p><?php the_field('text_need2'); ?></p>
      </div>
      <div class="child photo need">
        <img src="<?php echo(get_field('picture_need2')['url']); ?>"/>
      </div>
    </div>

    <div class="parent need line">
      <div class="child text need no_margin">
        <h2><?php the_field('subtitle_need3'); ?></h2>
        <p><?php the_field('text_need3'); ?></p>
      </div>
      <div class="child text need no_margin">
        <h2><?php the_field('subtitle_need4'); ?></h2>
        <p><?php the_field('text_need4'); ?></p>
      </div>
    </div>

    <div class="parent need line">
      <div class="child photo need">
        <img src="<?php echo(get_field('picture_need3')['url']); ?>"/>
      </div>
      <div class="child text need">
        <h2><?php the_field('subtitle_need5'); ?></h2>
        <p><?php the_field('text_need5'); ?></p>
      </div>
    </div>

    <div class="title_discover_need">
      <p><?php the_field('title_discover_need'); ?></p>
        <div class="button_discover_need">
          <a href="><?php the_field('button_discover_need'); ?>">voir la méthode</a>
        </div>
    </div>

    </div>

<?php
  get_footer();
?>
