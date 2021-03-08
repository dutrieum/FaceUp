      <?php $email = get_field('email', 'option'); ?>
      <footer>
        <div class="wrap_footer">
          <div id="contact">
            <p><?php the_field('phone', 'option'); ?></p>
            <a href="mailto:<?php echo(str_replace('@', 'arobaseat', $email)); ?>"><?php echo(str_replace('@', 'arobaseat', $email)); ?></a>
            <?php $mentions = get_field('mentions', 'option');?>
            <?php $button = get_field('button', 'option');?>
          </div>
          <div id="social">
            <a href="<?php echo(get_permalink($mentions->ID)); ?>">Mentions légales</a>
            <div>
              <a href="https://www.instagram.com/faciology_/" target="_blank">
                <img id="insta" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram logo">
              </a>
            </div>
          </div>
          <div id="meeting">
            <?php $appointment_button = get_field('button','option'); ?>
            <a href="<?php echo($appointment_button); ?>" target="_blank">PRENDRE RENDEZ-VOUS</a>
          </div>
      </footer>
    <?php wp_footer(); ?>
  </body>
</html>
