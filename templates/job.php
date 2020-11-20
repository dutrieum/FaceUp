<?php
/*
Template Name: Job
*/
?>

<?php
  get_header();
?>

<div class="bloc_job">
  <div class="text_job">
    <div id="title_job">
      <p><?php the_field('job');?></p>
    </div>
    <div class="photo_job">
      <img src="<?php echo(get_field('photo_job')['url']); ?>"/>
    </div>
    <div class="text1_job">
      <div id="text1_job1">
        <p><?php the_field('education'); ?></p>
      </div>
      <div id="text1_job2">
        <p><?php the_field('description_job'); ?></p>
      </div>
    </div>
  </div>
</div>


<?php
  get_footer();
?>
