    <footer>
      <div class="wrap_footer">
        <div id="contact">
          <p><?php the_field('address', 'option'); ?></p>
          <p><?php the_field('phone', 'option'); ?></p>
          <p><?php the_field('email', 'option'); ?></p>
          <p><?php $mentions = get_field('mentions', 'option');?></p>
        </div>
        <div id="social">
          <a href="<?php echo(get_permalink($mentions->ID)); ?>">Mentions Légales</a>
          <div>
            <img id="insta" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram logo">
          </div>
        </div>
        <div id="meeting">

        </div>
      </div>
    </footer>
  </body>
</html>
