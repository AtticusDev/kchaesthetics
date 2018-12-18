<?php
/**
 * Template Name: Home

 * The template for displaying the home page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KCHAesthetics
 */

get_header(); ?>


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'home' );

					endwhile; // End of the loop.
					?>


<?php
get_footer();
