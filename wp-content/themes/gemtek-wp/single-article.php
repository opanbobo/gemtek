<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 */

get_header();
?>

	<main id="primary" class="site-main article">

		<?php
		while ( have_posts() ) :
			the_post();
        ?>    
        <?php
        if ( has_post_thumbnail() ) :
            the_post_thumbnail('medium', array('class' => 'card-img-top'));
        endif;
        ?>    

		<?php the_content(); ?>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
