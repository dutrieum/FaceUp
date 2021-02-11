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
      <header>
          <a href="<?php echo home_url( '/' ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.37 319.19"><defs><style>.cls-1{fill:#f8b472;}</style></defs><title>Logo</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M356.54,103.29h-47l49.22-34c.34,3.39.52,6.85.52,10.37a103,103,0,0,1-2.7,23.59m-19.4,37.57H271.23a70.85,70.85,0,0,1-11.15-15.48h88.21a70.52,70.52,0,0,1-11.15,15.48m-62.44,3.31h59c-8.53,7.54-18.64,11.93-29.48,11.93s-21-4.39-29.49-11.93m-25-74.84,49.22,34h-47a103,103,0,0,1-2.7-23.59c0-3.49.19-7,.53-10.37m52.87-66V97.53l-35-74.71c9.71-12.07,22.07-18.92,35-19.46m38.36,19.46L305.84,97.54V3.37c13.44.55,25.69,7.81,35.05,19.45m17.4,42.79-50,34.5,34.86-74.32c7.66,10.66,13.06,24.44,15.14,39.82m-58.2,34.5-50-34.5c2-15,7.29-28.91,15.13-39.82Zm-47.43,6.49h103A90,90,0,0,1,350,122.08H258.4a90,90,0,0,1-5.74-15.48M304.19,0c-14.92,0-29.1,7.66-39.95,21.56-11.7,15-18.42,36.2-18.42,58.14,0,44,26.18,79.71,58.37,79.71s58.36-35.76,58.36-79.71S336.37,0,304.19,0"/><path class="cls-1" d="M100.54,303.34c-3.66,0-6,2.79-6,6.52s2.32,6.52,6,6.52,6-2.82,6-6.52-2.35-6.52-6-6.52m0-2.81a9.33,9.33,0,1,1-9.23,9.33,8.94,8.94,0,0,1,9.23-9.33"/><path class="cls-1" d="M118.82,313.89a7.79,7.79,0,0,0,5.71,2.49c2.59,0,3.62-1.27,3.62-2.46,0-1.63-1.92-2.11-4.11-2.68-3-.73-6.41-1.6-6.41-5.41,0-3,2.62-5.28,6.57-5.28a9.35,9.35,0,0,1,6.76,2.52l-1.81,2.35a7.33,7.33,0,0,0-5.22-2.05c-1.87,0-3.06.89-3.06,2.24s1.84,1.87,4,2.41c3,.76,6.52,1.68,6.52,5.6,0,3-2.11,5.57-7,5.57a9.63,9.63,0,0,1-7.33-2.87Z"/><polygon class="cls-1" points="143.73 303.61 138.27 303.61 138.27 300.82 152.36 300.82 152.36 303.61 146.9 303.61 146.9 318.87 143.73 318.87 143.73 303.61"/><path class="cls-1" d="M165.69,299.31l3.79-3.9h2.7l-4.46,3.9Zm-5.25,1.51h12.37v2.79h-9.2v4.68h9v2.78h-9v5h9.2v2.79H160.44Z"/><path class="cls-1" d="M189.87,303.34c-3.65,0-6,2.79-6,6.52s2.32,6.52,6,6.52,6-2.82,6-6.52-2.35-6.52-6-6.52m0-2.81a9.33,9.33,0,1,1-9.22,9.33,9,9,0,0,1,9.22-9.33"/><path class="cls-1" d="M215.05,303.61h-4.32v5.74h4.32a2.88,2.88,0,1,0,0-5.74m-7.49-2.79h7.93a5.66,5.66,0,1,1,0,11.31h-4.76v6.74h-3.17Z"/><path class="cls-1" d="M231.17,312.62h6.77l-3.39-9.12Zm7.66,2.78h-8.55L229,318.87h-3.46l7.09-18.05h3.95l7.09,18.05h-3.47Z"/><polygon class="cls-1" points="253.54 303.61 248.08 303.61 248.08 300.82 262.17 300.82 262.17 303.61 256.7 303.61 256.7 318.87 253.54 318.87 253.54 303.61"/><polygon class="cls-1" points="282.81 311 273.42 311 273.42 318.87 270.25 318.87 270.25 300.82 273.42 300.82 273.42 308.21 282.81 308.21 282.81 300.82 285.97 300.82 285.97 318.87 282.81 318.87 282.81 311"/><polygon class="cls-1" points="295.22 300.82 307.58 300.82 307.58 303.61 298.38 303.61 298.38 308.29 307.39 308.29 307.39 311.07 298.38 311.07 298.38 316.08 307.58 316.08 307.58 318.87 295.22 318.87 295.22 300.82"/><polygon class="cls-1" points="328.6 300.82 340.96 300.82 340.96 303.61 331.76 303.61 331.76 308.29 340.77 308.29 340.77 311.07 331.76 311.07 331.76 318.87 328.6 318.87 328.6 300.82"/><path class="cls-1" d="M351.91,312.62h6.76l-3.38-9.12Zm7.66,2.78H351l-1.33,3.47h-3.46l7.09-18.05h3.95l7.08,18.05h-3.46Z"/><path class="cls-1" d="M370,309.86a9.06,9.06,0,0,1,9.33-9.33,8.24,8.24,0,0,1,7.39,4.05L384,306a5.44,5.44,0,0,0-4.68-2.62c-3.44,0-6.09,2.73-6.09,6.52s2.65,6.52,6.09,6.52a5.37,5.37,0,0,0,4.68-2.62l2.71,1.37a8.25,8.25,0,0,1-7.39,4.06,9.07,9.07,0,0,1-9.33-9.33"/><rect class="cls-1" x="394.64" y="300.82" width="3.17" height="18.04"/><path class="cls-1" d="M410.85,312.62h6.76l-3.38-9.12Zm7.65,2.78H410l-1.32,3.47h-3.46l7.08-18.05h3.95l7.09,18.05h-3.46Z"/><polygon class="cls-1" points="430.67 300.82 433.84 300.82 433.84 316.08 441.79 316.08 441.79 318.87 430.67 318.87 430.67 300.82"/><rect class="cls-1" x="450.06" y="300.82" width="3.17" height="18.04"/><path class="cls-1" d="M463.07,313.89a7.81,7.81,0,0,0,5.71,2.49c2.6,0,3.62-1.27,3.62-2.46,0-1.63-1.92-2.11-4.11-2.68-3-.73-6.41-1.6-6.41-5.41,0-3,2.63-5.28,6.58-5.28a9.37,9.37,0,0,1,6.76,2.52l-1.81,2.35a7.37,7.37,0,0,0-5.23-2.05c-1.86,0-3.05.89-3.05,2.24s1.84,1.87,4,2.41c3,.76,6.51,1.68,6.51,5.6,0,3-2.11,5.57-7,5.57a9.66,9.66,0,0,1-7.34-2.87Z"/><polygon class="cls-1" points="487.98 303.61 482.52 303.61 482.52 300.82 496.61 300.82 496.61 303.61 491.15 303.61 491.15 318.87 487.98 318.87 487.98 303.61"/><polygon class="cls-1" points="504.7 300.82 517.06 300.82 517.06 303.61 507.86 303.61 507.86 308.29 516.87 308.29 516.87 311.07 507.86 311.07 507.86 316.08 517.06 316.08 517.06 318.87 504.7 318.87 504.7 300.82"/><path class="cls-1" d="M0,268.11V200.92H47.55v12.59H14.3v14.1H46.84v12.6H14.3v27.9Z"/><path class="cls-1" d="M107.17,268.11l-4.23-11.38H74.13L69.9,268.11H53.68l25.89-67.19H97.5l25.89,67.19ZM88.54,215.22,78.06,244.13H99Z"/><path class="cls-1" d="M130.54,234.56c0-20.75,15.61-34.75,35.86-34.75,14.7,0,23.27,8,28,16.42l-12.29,6.05a18.17,18.17,0,0,0-15.71-9.78c-12.29,0-21.16,9.37-21.16,22.06s8.87,22.06,21.16,22.06a18.17,18.17,0,0,0,15.71-9.77l12.29,6c-4.73,8.36-13.3,16.52-28,16.52C146.15,269.32,130.54,255.21,130.54,234.56Z"/><path class="cls-1" d="M210.51,268.11V200.92h14.31v67.19Z"/><path class="cls-1" d="M242.44,234.56c0-20.24,14.81-34.75,35.16-34.75s35,14.51,35,34.75-14.81,34.76-35,34.76S242.44,254.81,242.44,234.56Zm55.5,0c0-12.59-8-22.06-20.34-22.06s-20.45,9.47-20.45,22.06,8,22.06,20.45,22.06S297.94,247.06,297.94,234.56Z"/><path class="cls-1" d="M329.67,268.11V200.92h14.4v54.6h28.41v12.59Z"/><path class="cls-1" d="M383.76,234.56c0-20.24,14.8-34.75,35.15-34.75S454,214.32,454,234.56s-14.81,34.76-35.06,34.76S383.76,254.81,383.76,234.56Zm55.5,0c0-12.59-8-22.06-20.35-22.06s-20.45,9.47-20.45,22.06,8,22.06,20.45,22.06S439.26,247.06,439.26,234.56Z"/><path class="cls-1" d="M468.36,234.56c0-21.25,16.12-34.75,35.86-34.75,13.9,0,22.67,7.05,27.7,15l-11.78,6.45a19.31,19.31,0,0,0-15.92-8.77c-12.29,0-21.15,9.37-21.15,22.06s8.86,22.06,21.15,22.06a22.35,22.35,0,0,0,14.21-5.13v-8.06H500.7V230.94h32v25.79a37.18,37.18,0,0,1-28.51,12.59C484.48,269.32,468.36,255.72,468.36,234.56Z"/><path class="cls-1" d="M568.38,268.11v-27.5l-25.79-39.69h16.32l16.62,26.89,16.62-26.89h16.22l-25.68,39.69v27.5Z"/></g></g></svg></a>
          <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
      </header>
