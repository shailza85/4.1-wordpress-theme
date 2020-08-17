<footer>
    <h2><?php bloginfo( 'title' ); ?> Footer</h2>
    <p>
      &copy; Copyright
      <?php echo date( 'Y' ); ?>
      <a href="<?php echo site_url(); ?>"><?php bloginfo( 'title' ); ?></a>;
      All Rights Reserved.
    </p>
    <nav>
      <h3>Footer Navigation</h3>
      <?php
        // Output another navigation.
        wp_nav_menu(
          array(
            'theme_location' => 'footer_menu'
          )
        );
      ?>
    </nav>
  </footer>
  <?php
    // Very similar to wp_head(), but for footer scripts or outputs.
    wp_footer();
  ?>
</body>
</html>