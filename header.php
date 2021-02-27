<!DOCTYPE html>
<html>
<?php
  global $template;
  $template_name = basename($template, '.php');
?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Faciology</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400&family=Josefin+Sans:ital,wght@0,300;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body class="<?php echo($template_name); ?>">
    <!-- <div class="loader" id="svgContainer"></div>
    <script>
      jQuery(window).load(function(){ jQuery(".loader").fadeOut("200"); });
      var svgContainer = document.getElementById('svgContainer');
      var animItem = bodymovin.loadAnimation({
        wrapper: svgContainer,
        animType: 'svg',
        loop: true,
        path: 'assets/js/logo_anime.json'
      });
    </script> -->
      <header>
          <a href="<?php echo home_url( '/' ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 181.03 86.94"><defs><style>.cls-1{fill:#f8b472;}</style></defs><title>Fichier 1</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M102.8,24.24h-11l11.55-8c.08.8.12,1.61.12,2.44a24.15,24.15,0,0,1-.63,5.53m-4.55,8.82H82.78a16.46,16.46,0,0,1-2.62-3.63h20.7a16.43,16.43,0,0,1-2.61,3.63m-14.66.78H97.43a10,10,0,0,1-13.84,0M77.72,16.27l11.55,8h-11a24.15,24.15,0,0,1-.63-5.53c0-.82,0-1.63.13-2.44M90.12.79v22.1L81.9,5.36A11.26,11.26,0,0,1,90.12.79m9,4.57L90.9,22.89V.79a11.25,11.25,0,0,1,8.23,4.57m4.08,10L91.48,23.5,99.66,6.05a20.91,20.91,0,0,1,3.55,9.35M89.55,23.5,77.82,15.4a21,21,0,0,1,3.55-9.35ZM78.42,25h24.19a21.1,21.1,0,0,1-1.35,3.63H79.77A20.31,20.31,0,0,1,78.42,25M90.51,0C87,0,83.68,1.8,81.14,5.06a22.5,22.5,0,0,0-4.33,13.65C76.81,29,83,37.42,90.51,37.42s13.7-8.4,13.7-18.71S98.07,0,90.51,0"/><polygon class="cls-1" points="3.65 51.1 3.65 57.08 13.14 57.08 13.14 60.17 3.65 60.17 3.65 67.7 0 67.7 0 48.04 14.35 48.04 14.35 51.1 3.65 51.1"/><path class="cls-1" d="M31.49,63.15H21.65L19.72,67.7H16L24.8,48h3.6L37.27,67.7H33.45Zm-1.21-2.87-3.71-8.59-3.68,8.59Z"/><path class="cls-1" d="M39.77,57.87c0-5.87,4.5-10.11,10.54-10.11A10,10,0,0,1,58.09,51l-2.36,2.22A7,7,0,0,0,50.47,51a6.91,6.91,0,1,0,0,13.82,6.87,6.87,0,0,0,5.26-2.33l2.36,2.24A10,10,0,0,1,50.28,68c-6,0-10.51-4.24-10.51-10.11"/><rect class="cls-1" x="63.28" y="48.04" width="3.65" height="19.66"/><path class="cls-1" d="M72.52,57.87c0-5.82,4.5-10.11,10.59-10.11S93.7,52,93.7,57.87,89.21,68,83.11,68s-10.59-4.3-10.59-10.11m17.5,0a6.91,6.91,0,1,0-6.91,6.91A6.7,6.7,0,0,0,90,57.87"/><polygon class="cls-1" points="99.26 48.04 102.91 48.04 102.91 64.61 113.19 64.61 113.19 67.7 99.26 67.7 99.26 48.04"/><path class="cls-1" d="M116,57.87c0-5.82,4.5-10.11,10.59-10.11S137.18,52,137.18,57.87,132.69,68,126.59,68,116,63.68,116,57.87m17.5,0a6.91,6.91,0,1,0-6.91,6.91,6.7,6.7,0,0,0,6.91-6.91"/><path class="cls-1" d="M156.17,57.64h3.45v7.84a12.41,12.41,0,0,1-7.69,2.5c-6.1,0-10.59-4.24-10.59-10.11S145.83,47.76,152,47.76a10.16,10.16,0,0,1,7.9,3.2l-2.31,2.24A7.29,7.29,0,0,0,152.15,51C148,51,145,53.79,145,57.87a6.76,6.76,0,0,0,7.1,6.91,8,8,0,0,0,4-1Z"/><polygon class="cls-1" points="173.33 60.76 173.33 67.7 169.68 67.7 169.68 60.82 161.96 48.04 165.86 48.04 171.62 57.61 177.43 48.04 181.03 48.04 173.33 60.76"/><path class="cls-1" d="M23.86,79.31a2.61,2.61,0,1,1-2.55,2.61,2.55,2.55,0,0,1,2.55-2.61m0,4.61a2,2,0,1,0-1.94-2,1.93,1.93,0,0,0,1.94,2"/><path class="cls-1" d="M30.39,84c.69,0,1.21-.35,1.21-.91,0-1.24-2.87-.77-2.87-2.43,0-.76.7-1.33,1.68-1.33a2.57,2.57,0,0,1,1.57.54A.09.09,0,0,1,32,80l-.21.22a.12.12,0,0,1-.09,0,.16.16,0,0,1-.09,0,2,2,0,0,0-1.2-.39c-.55,0-1.09.26-1.09.79,0,1.09,2.87.63,2.87,2.42a1.62,1.62,0,0,1-1.81,1.47,2.47,2.47,0,0,1-1.75-.7.11.11,0,0,1,0-.17l.18-.19a.14.14,0,0,1,.09,0,.18.18,0,0,1,.09,0,2.08,2.08,0,0,0,1.39.52"/><path class="cls-1" d="M37.36,84.13c0,.07,0,.11-.06.16a2.1,2.1,0,0,1-1,.24,1.07,1.07,0,0,1-1.21-1.16V80h-.58a.1.1,0,0,1-.11-.11v-.36a.1.1,0,0,1,.11-.11h.58V78c0-.07,0-.11.12-.11h.39a.1.1,0,0,1,.11.11v1.38h1.32a.1.1,0,0,1,.11.11v.36c0,.07,0,.11-.1.11H35.75v3.32c0,.43.28.61.67.61a1.32,1.32,0,0,0,.66-.17l.05,0s0,0,.07,0Z"/><path class="cls-1" d="M43.49,83.56a.12.12,0,0,1,.08,0,.1.1,0,0,1,.09,0l.18.26a.12.12,0,0,1,0,.16,3.12,3.12,0,0,1-1.8.52,2.57,2.57,0,0,1-2.55-2.61,2.44,2.44,0,0,1,2.42-2.61A2.48,2.48,0,0,1,44.3,82a.14.14,0,0,1-.15.15H40.06A2,2,0,0,0,42,84a2.6,2.6,0,0,0,1.48-.41m.2-1.9a1.81,1.81,0,1,0-3.62,0Zm-2.06-2.93c-.06,0-.07-.08,0-.15L42.42,77a.14.14,0,0,1,.13-.08h.05l.32.11c.07,0,.08.07,0,.14L42,78.77a.13.13,0,0,1-.11.07h-.06Z"/><path class="cls-1" d="M49,79.31a2.61,2.61,0,1,1-2.55,2.61A2.55,2.55,0,0,1,49,79.31m0,4.61a2,2,0,1,0-1.94-2,1.93,1.93,0,0,0,1.94,2"/><path class="cls-1" d="M54.85,79.41a.1.1,0,0,1,.11.11v1a2.3,2.3,0,0,1,2-1.2,2.62,2.62,0,0,1,0,5.22,2.33,2.33,0,0,1-2-1.21v3.5a.11.11,0,0,1-.11.12h-.4a.11.11,0,0,1-.11-.12v-7.3a.1.1,0,0,1,.11-.11Zm2,.5a2,2,0,1,0,1.92,2,1.93,1.93,0,0,0-1.92-2"/><path class="cls-1" d="M66.23,84.43a.1.1,0,0,1-.11-.11v-1a2.34,2.34,0,0,1-2.05,1.21,2.62,2.62,0,0,1,0-5.22,2.31,2.31,0,0,1,2.05,1.2v-1a.1.1,0,0,1,.11-.11h.39c.08,0,.12,0,.12.11v4.8c0,.07,0,.11-.12.11Zm-2-.51a2,2,0,1,0-1.93-2,1.93,1.93,0,0,0,1.93,2"/><path class="cls-1" d="M72.51,84.13c0,.07,0,.11-.06.16a2.06,2.06,0,0,1-1,.24,1.07,1.07,0,0,1-1.21-1.16V80H69.7a.1.1,0,0,1-.11-.11v-.36a.1.1,0,0,1,.11-.11h.59V78c0-.07,0-.11.12-.11h.39a.1.1,0,0,1,.11.11v1.38h1.31a.1.1,0,0,1,.11.11v.36c0,.07,0,.11-.1.11H70.91v3.32c0,.43.28.61.67.61a1.31,1.31,0,0,0,.65-.17l0,0s0,0,.07,0Z"/><path class="cls-1" d="M75.45,84.43a.1.1,0,0,1-.11-.11V77a.1.1,0,0,1,.11-.11h.41A.1.1,0,0,1,76,77v3.51a2.07,2.07,0,0,1,1.81-1.21c1.36,0,2,1,2,2.37v2.64a.1.1,0,0,1-.11.11h-.39c-.08,0-.12,0-.12-.11V81.77c0-1.12-.44-1.86-1.49-1.86a1.9,1.9,0,0,0-1.66,2v2.44a.1.1,0,0,1-.11.11Z"/><path class="cls-1" d="M86.4,83.56a.12.12,0,0,1,.08,0,.1.1,0,0,1,.09,0l.18.26a.12.12,0,0,1,0,.16,3.11,3.11,0,0,1-1.79.52,2.56,2.56,0,0,1-2.55-2.61,2.44,2.44,0,0,1,2.42-2.61A2.49,2.49,0,0,1,87.22,82a.14.14,0,0,1-.16.15H83a2,2,0,0,0,2,1.79,2.59,2.59,0,0,0,1.47-.41m.2-1.9a1.81,1.81,0,1,0-3.62,0Z"/><path class="cls-1" d="M91.21,84c.68,0,1.21-.35,1.21-.91,0-1.24-2.87-.77-2.87-2.43,0-.76.7-1.33,1.68-1.33a2.57,2.57,0,0,1,1.57.54.09.09,0,0,1,0,.16l-.21.22a.12.12,0,0,1-.09,0,.19.19,0,0,1-.1,0,1.93,1.93,0,0,0-1.19-.39c-.55,0-1.09.26-1.09.79,0,1.09,2.87.63,2.87,2.42a1.62,1.62,0,0,1-1.81,1.47,2.51,2.51,0,0,1-1.76-.7.11.11,0,0,1,0-.17l.19-.19a.14.14,0,0,1,.09,0,.18.18,0,0,1,.09,0,2.08,2.08,0,0,0,1.39.52"/><path class="cls-1" d="M102.2,77.53s0,0-.06,0l-.06,0a1.34,1.34,0,0,0-.64-.15c-.41,0-.77.18-.77,1v1h1.14a.1.1,0,0,1,.11.11v.36a.1.1,0,0,1-.11.11h-1.14v4.33a.1.1,0,0,1-.11.11h-.39c-.08,0-.12,0-.12-.11V80h-.71a.1.1,0,0,1-.11-.11v-.36a.1.1,0,0,1,.11-.11h.71V78.25c0-1,.54-1.44,1.3-1.44a2.09,2.09,0,0,1,1,.26c.08.05.07.07,0,.14Z"/><path class="cls-1" d="M108.5,84.43a.1.1,0,0,1-.11-.11v-1a2.34,2.34,0,0,1-2,1.21,2.62,2.62,0,0,1,0-5.22,2.31,2.31,0,0,1,2,1.2v-1a.1.1,0,0,1,.11-.11h.39c.08,0,.12,0,.12.11v4.8c0,.07,0,.11-.12.11Zm-2-.51a2,2,0,1,0-1.94-2,1.93,1.93,0,0,0,1.94,2"/><path class="cls-1" d="M115.8,83.92a.11.11,0,0,1,0,.17,2.59,2.59,0,1,1-1.44-4.78,2.49,2.49,0,0,1,1.42.43c.09.05.1.1.05.17l-.21.3a.14.14,0,0,1-.09.05l-.08,0a2,2,0,1,0-1.09,3.69,2.06,2.06,0,0,0,1.1-.32.16.16,0,0,1,.09,0s0,0,.08.06Z"/><path class="cls-1" d="M119.12,76.85a.44.44,0,1,1-.44.44.43.43,0,0,1,.44-.44m-.2,7.58a.1.1,0,0,1-.11-.11v-4.8a.1.1,0,0,1,.11-.11h.4a.1.1,0,0,1,.11.11v4.8a.1.1,0,0,1-.11.11Z"/><path class="cls-1" d="M126.87,84.43a.1.1,0,0,1-.11-.11v-1a2.35,2.35,0,0,1-2.05,1.21,2.62,2.62,0,0,1,0-5.22,2.33,2.33,0,0,1,2.05,1.2v-1a.1.1,0,0,1,.11-.11h.39c.08,0,.12,0,.12.11v4.8c0,.07,0,.11-.12.11Zm-2-.51a2,2,0,1,0-1.94-2,1.93,1.93,0,0,0,1.94,2"/><rect class="cls-1" x="130.71" y="76.9" width="0.62" height="7.53" rx="0.11"/><path class="cls-1" d="M135.06,76.85a.44.44,0,1,1-.44.44.43.43,0,0,1,.44-.44m-.2,7.58a.1.1,0,0,1-.11-.11v-4.8a.1.1,0,0,1,.11-.11h.4a.1.1,0,0,1,.11.11v4.8a.1.1,0,0,1-.11.11Z"/><path class="cls-1" d="M140,84c.68,0,1.2-.35,1.2-.91,0-1.24-2.87-.77-2.87-2.43,0-.76.7-1.33,1.69-1.33a2.54,2.54,0,0,1,1.56.54.09.09,0,0,1,0,.16l-.21.22a.12.12,0,0,1-.09,0,.16.16,0,0,1-.09,0,1.93,1.93,0,0,0-1.19-.39c-.56,0-1.1.26-1.1.79,0,1.09,2.87.63,2.87,2.42a1.61,1.61,0,0,1-1.8,1.47,2.48,2.48,0,0,1-1.76-.7.11.11,0,0,1,0-.17l.18-.19a.14.14,0,0,1,.09,0,.18.18,0,0,1,.09,0A2.09,2.09,0,0,0,140,84"/><path class="cls-1" d="M147,84.13c0,.07,0,.11-.06.16a2.06,2.06,0,0,1-.95.24,1.08,1.08,0,0,1-1.22-1.16V80h-.58a.1.1,0,0,1-.11-.11v-.36a.1.1,0,0,1,.11-.11h.58V78c0-.07,0-.11.12-.11h.39a.1.1,0,0,1,.11.11v1.38h1.32a.1.1,0,0,1,.11.11v.36c0,.07,0,.11-.1.11h-1.33v3.32c0,.43.29.61.68.61a1.31,1.31,0,0,0,.65-.17l.05,0s.05,0,.07,0Z"/><path class="cls-1" d="M153.11,83.56a.12.12,0,0,1,.08,0,.1.1,0,0,1,.09,0l.18.26a.12.12,0,0,1,0,.16,3.11,3.11,0,0,1-1.79.52,2.56,2.56,0,0,1-2.55-2.61,2.44,2.44,0,0,1,2.42-2.61A2.49,2.49,0,0,1,153.93,82a.14.14,0,0,1-.16.15h-4.09a2,2,0,0,0,2,1.79,2.59,2.59,0,0,0,1.47-.41m.2-1.9a1.81,1.81,0,1,0-3.62,0Z"/><path class="cls-1" d="M157.92,84c.68,0,1.2-.35,1.2-.91,0-1.24-2.87-.77-2.87-2.43,0-.76.71-1.33,1.69-1.33a2.54,2.54,0,0,1,1.56.54c.08.05.08.11,0,.16l-.22.22a.12.12,0,0,1-.09,0,.16.16,0,0,1-.09,0,1.93,1.93,0,0,0-1.19-.39c-.55,0-1.09.26-1.09.79,0,1.09,2.87.63,2.87,2.42a1.62,1.62,0,0,1-1.81,1.47,2.5,2.5,0,0,1-1.76-.7.11.11,0,0,1,0-.17l.18-.19a.14.14,0,0,1,.09,0,.18.18,0,0,1,.09,0,2.13,2.13,0,0,0,1.4.52"/><rect class="cls-1" y="81.94" width="16.43" height="0.59"/><rect class="cls-1" x="163.8" y="81.94" width="17.23" height="0.59"/></g></g></svg></a>
          <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
      </header>
