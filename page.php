<?php


get_header();
?>

    <main id="primary" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            include_once('pagebuilder.php');
            
        endwhile; // End of the loop.
        ?>
	</main><!-- #main -->
    
<?php
get_footer();
