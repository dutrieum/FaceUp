      <footer>
        <div class="wrap_footer">
          <div id="contact">
            <p><?php the_field('phone', 'option'); ?></p>
            <p><?php the_field('email', 'option'); ?></p>
            <p><?php $mentions = get_field('mentions', 'option');?></p>
            <p><?php $button = get_field('button', 'option');?></p>
          </div>
          <div id="social">
            <a href="<?php echo(get_permalink($mentions->ID)); ?>">Mentions Légales</a>
            <div>
              <a href="https://www.instagram.com/faceup_facialist/?hl=fr" target="_blank">
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
