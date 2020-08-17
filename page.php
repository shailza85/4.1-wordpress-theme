<?php
/**
 * get_header() will run the header.php file.
 */
get_header();
?>
<article>
<h2>Page: <?php the_title();?></h2>
<?php the_content(); ?>

</article>


<?php 
get_footer(); //get_header() will run the header.php file.
?>