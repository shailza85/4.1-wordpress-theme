<?php get_header(); ?>

<article>
  <h2>Blog Post: <?php the_title(); // Output this page's title. ?></h2>
  <p>
    This blog post was published on:
    <time datetime="<?php echo get_the_date( DATE_ATOM ); // The blog post publish date from WP. ?>">
      <?php echo get_the_date(); // The blog post publish date from WP. ?>
    </time>
  </p>
  <h3>Categories:</h3>
  <ul>
    <?php
      // Get the categories for this post (just an array of their category ID numbers.)
      $post_categories = wp_get_post_categories( get_the_id() ); // get_the_id() gets the current post/page ID.
      // Loop through the categories for this post.
      foreach($post_categories as $c){
        // Get the category object (WP_Term class instance.)
        $cat = get_category( $c ); // Returns a WP_Term object.
        // Get the URL for this category so we can link to it.
        $catURL = get_term_link( $cat );
        // Echo each category as a list item.
        echo "<li><a href=\"{$catURL}\">{$cat->name}</a></li>";
      }
    ?>
  </ul>
  <h3>Post Content:</h3>
  <?php the_content(); // Output this page's content. ?>
</article>

<?php get_footer();