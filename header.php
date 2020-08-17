<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'title' ); ?></title>
  <?php
    // This will execute any scripts, or echo any <link>/<script> elements
    // that the theme, WordPress itself, or any installed plugins need to
    // have present / running to function properly.
    wp_head();
  ?>
</head>
<body>
  <h1><?php bloginfo( 'title' ); ?></h1>
  <nav>
    <h2><?php bloginfo( 'title' ); ?> Navigation</h2>
    <?php
      // Output the navigation (list of anchors / links.)
      wp_nav_menu(
        array( // Ensure theme_location is defined so we can link this to a registered nav.
          'theme_location' => 'main_menu'
        )
      );
    ?>
  </nav>